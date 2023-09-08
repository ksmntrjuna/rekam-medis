<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{

	public function upload(Request $request){
		$validator = Validator::make($request->all(), [
			'kode_member' => 'required',
			'position' => 'required',
			'photo' => 'image|required|mimes:jpeg,png,jpg,gif,svg',

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
		Carbon::setLocale('id');
        $now = Carbon::now()->format('Y-m-d H:i:s');
		$photo = new Photo();
		$photo->id = Str::uuid();
		$photo->nobase = $request->kode_member;
		$photo->position = $request->position;
		$photof = $request->photo;
		if($photof){
			$ext = $photof->getClientOriginalExtension();
			$newName = rand(100000,1001238912).".".$ext;
			// $photof->move('uploads/photos',$newName);
			$image = Image::make($photof->getRealPath());
			$image = $image->resize(2000, 2000, function ($constraint) {	// resize to max 2000px side
				$constraint->aspectRatio();
			});
			$image->stream();
			
			// File::put(base_path().'/public/uploads/photos/' . $newName, $image);		// local
			Storage::put(config('filesystems.disks.public').''.$newName, $image);		// upload to S3

			$photo->photo = $newName;
		}else{
			$photo->photo = 'no-image-box.png';
		}
		// $photo->photo = $request->photo;
		$photo->branch = Auth::user()->branch;
		$photo->user_id = Auth::user()->id;
		$photo->date = $now;
		$photo->treatment_code = $request->treatment_code;
		$photo->note = $request->note;
		$photo->save();
		$patient = Patient::where('nobase', $request->kode_member)->first();
		if($patient){
			if(date('Y-m-d', strtotime($patient->last))!=date('Y-m-d')){
				$update = [
					'branch' => Auth::user()->branch,
					'last' => $now,
				];
				Patient::where('nobase', $request->kode_member)->update($update);
			}
		}
		LogActivity::create('Upload Photo =>'.$photo, 'mobile');
		return response()->json(['status' => 'success', 'data' => (object)['message' => 'Foto Berhasil Disimpan']]);
	}
}
