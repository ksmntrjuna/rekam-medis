<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Position;
use App\Models\Patient;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{
	public function list(Request $request){
		$get = (object)[
			'nobase' => $request->nobase,
		];
		$auth = Auth::user();
		$q = Photo::join('positions', 'photos.position', '=', 'positions.id')
		->select('photos.*', 'positions.name as posisi');
        if($auth->role!='dokter' && $auth->role!='admin' && $auth->role!='cabang'){
			$q->where('photos.user_id', $auth->id);
		}
		if($auth->role=='cabang'){
			$q->where('photos.branch', $auth->branch);
		}
		if($request->nobase){
			$q->where('photos.nobase', $request->nobase);
		}
		$data = $q->orderBy('created_at', 'desc')
		->limit(50)
		->get();

		$datas = [
			'data' => $data,
			'get' => $get,
		];

		return view('dashboard.photo.list')->with($datas);
	}

	public function create(){
		$position = Position::where('role_id', '3')->orderBy('name', 'asc')->get();
		$users = User::whereIn('role', ['fo', 'therapist'])->get();
        $treatment = Treatment::get(['code', 'name']);
		$datas = [
			'position' => $position,
			'users' => $users,
			'treatment' => $treatment,
		];
		return view('dashboard.photo.create')->with($datas);
	}

	public function upload(Request $request){
		$validator = Validator::make($request->all(), [
			'kode_member' => 'required',
			'nama' => 'required',
			'telp' => 'required|numeric',
			'position' => 'required',
			'photo' => 'image|required|mimes:jpeg,png,jpg,gif,svg,png',
		]);
		if($validator->fails()){
			return response()->json(['status' => 'error', 'message' => $validator->errors()->first()]);
		}
		$patient = Patient::where('nobase', $request->kode_member)->first();
		if($patient==null){
			$patient = new Patient();
			$patient->id = Str::uuid();
			$patient->nobase = strtoupper($request->kode_member);
			$patient->name = strtoupper($request->nama);
			$patient->telp = $request->telp;
			$patient->save();
		}
		$date = $request->date.' '.$request->time;
		$photo = new Photo();
		$photo->id = Str::uuid();
		$photo->nobase = $request->kode_member;
		$photo->patient_name = $request->patient_name;
		$photo->treatment_code = $request->treatment;
		$photo->position = $request->position;
		$photo->date = $request->date.' '.$request->time;
		$photof = $request->photo;
		if($photof){
			$ext = $photof->getClientOriginalExtension();
			$newName = rand(100000,1001238912).".".$ext;

			$image = Image::make($photof->getRealPath());
			$image = $image->resize(2000, 2000, function ($constraint) {	// resize to max 2000px side
				$constraint->aspectRatio();
			});
			$image->stream();
			
			// File::put(base_path().'/public/uploads/photos/' . $newName, $image);		// local
			Storage::put(config('filesystems.disks.s3.folder').''.$newName, $image);		// upload to S3

			$photo->photo = $newName;


		}else{
			$photo->photo = 'no-image-box.png';
		}
		// $photo->photo = $request->photo;
		if(Auth::user()->role=='admin'){
			$user_id = $request->user_id;
			$branch = User::find($user_id)->branch;
			$photo->user_id = $user_id;
			$photo->branch = $branch;
		}else{
			$photo->branch = Auth::user()->branch;
			$photo->user_id = Auth::user()->id;
		}
		// $photo->date = date('Y-m-d H:i:s');
		$photo->date = $date;
		$photo->note = $request->note;
		$photo->save();
		$patient = Patient::where('nobase', $request->kode_member)->orderBy('created_at', 'desc')->first();
		if($patient->last < $date){
			$patient->last = $date;
			$patient->save();
		}
		LogActivity::create('Upload Photo [dashboard] =>'.$photo, 'dashboard');		
		// return response()->json(['status' => 'success', 'message' => 'Foto Berhasil Disimpan']);
		return redirect('/dashboard/photo')->with('alert', 'Data Berhasil Diupdate');
	}

	public function edit($id){
		$data = Photo::find($id);
		$position = Position::where('role_id', '3')->orderBy('created_at', 'desc')->get();
		$users = User::whereIn('role', ['fo', 'therapist'])->get();
        $treatment = Treatment::get(['code', 'name']);
		$datas = [
			'data' => $data,
			'position' => $position,
			'users' => $users,
			'treatment' => $treatment
		];

    	// dd($data);
		return view('dashboard.photo.edit')->with($datas);
	}

	public function update(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'kode_member' => 'required',
			'position' => 'required',
		]);
		
		if($validator->fails()){
			return response()->json(['status' => 'error', 'message' => $validator->errors()->first()]);
		}

		$data = array(
			'id' => $request->id,
			'nobase' => $request->kode_member,
			'treatment_code' => $request->treatment,
			'position' => $request->position,
			'date' => $request->date.' '.$request->time,
			'note' => $request->note,
		);	
		if(Auth::user()->role=='admin'){
			$user_id = $request->user_id;
			$branch = User::find($user_id)->branch;
			$data['user_id'] = $user_id;
			$data['branch'] = $branch;
		}

		// dd($data);

		// if ($request->file('photo')) {

		// 	$p = Photo::where('id', $request->id)->first();
		// 	File::delete(base_path().'/public/uploads/photos/' . $p->photo);

		$p = Photo::where('id', $request->id)->first();
		if ($request->file('photo')) {

			if ($p) {
				// File::delete(base_path().'/public/uploads/photos/' . $p->photo);		// local
				Storage::delete(config('filesystems.disks.s3.folder').''.$p->photo);		// delete from S3
			}

			// $file = $request->file('photo');

			// $photo = 'photo_'.str_replace(' ', '_', $request->judul).'_'.time().
			// '.'.$request->file('photo')->getClientOriginalExtension();

			// $photo_destination = base_path().'/public/uploads/photos/';

			// $request->file('photo')->move($photo_destination, $photo);
			// $data['photo'] = $photo;

			$photof = $request->photo;

			$ext = $photof->getClientOriginalExtension();
			$newName = rand(100000,1001238912).".".$ext;
			// $photof->move('uploads/photos',$newName);
			// $thumbnailImage = Image::make($photof);
			// $photosPath = public_path('/uploads/photos/');
			// // $thumbnailImage->resize(150,150);
			// $thumbnailImage->save($photosPath.$newName, 60);

			$image = Image::make($photof->getRealPath());
			$image = $image->resize(2000, 2000, function ($constraint) {	// resize to max 2000px side
				$constraint->aspectRatio();
			});
			$image->stream();
			
			// File::put(base_path().'/public/uploads/photos/' . $newName, $image);		// local
			Storage::put(config('filesystems.disks.s3.folder').''.$newName, $image);		// upload to S3

			$data['photo'] = $newName;
		}

		// }

		$update = Photo::where('id', $request->id)->update($data);

		$patient = Patient::where('nobase', $request->kode_member)->orderBy('created_at', 'desc')->first();
		if($patient->last < $update){
			$patient->last = $update;
			$patient->save();
		}
		if ($update) {
			LogActivity::create('Edit Photo (lama) =>'.$p, 'dashboard');
			LogActivity::create('Edit Photo (baru) =>'.json_encode($data), 'dashboard');
			return redirect('/dashboard/photo')->with('alert', 'Data Berhasil Diupdate');
		}
	}

	public function delete($id)
	{
		$p = Photo::where('id',$id)->first();
		// File::delete(base_path().'/public/uploads/photos/' . $p->photo);		// local delete
		Storage::delete(config('filesystems.disks.s3.folder').''.$p->photo);		// delete from S3

		$delete = Photo::where('id', $id)->delete();

		if ($delete) {
			LogActivity::create('Delete Photo =>'.$p, 'dashboard');
			return redirect('/dashboard/photo')->with('alert', 'Data Berhasil Dihapus');
		}
	}
}
