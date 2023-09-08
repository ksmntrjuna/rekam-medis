<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use App\Models\Position;
use App\Models\Role;
use App\Models\Photo;
use App\Models\Treatment;
use App\Models\TreatmentPosition;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PositionController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
		$this->middleware(function ($request, $next) {
			$this->user = Auth::user();
			if($this->user->role!='admin'){
				return abort(404);
			}
			return $next($request);
		});
	}

	public function list(){
		$data = Position::orderBy('created_at', 'desc')->get();
		$role = Role::whereIn('id', [3,4])->get();
		$datas = [
			'role' => $role,
			'data' => $data,
		];
		return view('dashboard.position.list')->with($datas);
	}

	public function create()
	{
		$role = Role::whereIn('id', [3,4])->orderBy('id', 'desc')->get();
		$treatment = Treatment::get();
		$datas = [
			'role' => $role,
			'treatment' => $treatment,
		];
		return view('dashboard.position.create')->with($datas);
	}

	public function upload(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'status' => 'required',
			// 'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg,png',
		]);

		$position = new Position();
		$position->id = Str::uuid();
		$position->name = $request->name;
		$position->role_id = $request->role_id;
		$position->status = $request->status;

		if (empty($request->file('image'))) {
			$position->image = '';
		} else {
			$photo = 'position_'.str_replace(' ', '_', $request->name).'_'.time().
			'.'.$request->file('image')->getClientOriginalExtension();

			$photo_destination = base_path().'/public/uploads/photos/';

			$request->file('image')->move($photo_destination, $photo);
			$position->image = $photo;
		}

		$position->save();
		LogActivity::create('Tambah Position =>'.$position, 'dashboard');
		$role = Role::find($request->role_id);
		return redirect('/dashboard/position#'.$role->name)->with('alert', 'Data Berhasil Disimpan');
	}

	public function edit($id){
		$data = Position::find($id);
		$role = Role::whereIn('id', [3,4])->orderBy('id', 'desc')->get();
		$datas = [
			'data' => $data,
			'role' => $role,
		];

		return view('dashboard.position.edit')->with($datas);
	}

	public function update(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'status' => 'required',
			'role_id' => 'required',
		]);

		$data = array(
			'id' => $request->id,
			'name' => $request->name,
			'status' => $request->status,
		);	
		$p = Position::where('id', $request->id)->first();
		if ($request->file('image')) {

			File::delete(base_path().'/public/uploads/photos/' . $p->image);

			// $file = $request->file('image');

			$photo = 'position_'.str_replace(' ', '_', $request->name).'_'.time().
			'.'.$request->file('image')->getClientOriginalExtension();

			$photo_destination = base_path().'/public/uploads/photos/';

			$request->file('image')->move($photo_destination, $photo);
			$data['image'] = $photo;
		}

		$update = Position::where('id', $request->id)->update($data);
		$role = Role::find($request->role_id);
		if ($update) {
			LogActivity::create('Edit Position (lama) =>'.$p, 'dashboard');
			LogActivity::create('Edit Position (baru)=>'.json_encode($data), 'dashboard');
			return redirect('/dashboard/position#'.$role->name)->with('alert', 'Data Berhasil Diupdate');
		}
	}

	public function delete($id)
	{
		$cek = Photo::where('position', $id)->get();
		if($cek->count()>0){
			return redirect('/dashboard/position')->with('alert', 'Data Tidak Dapat Dihapus Karena Sudah Dipakai');
		}
		$p = Position::where('id',$id)->first();

		File::delete(base_path().'/public/uploads/photos/' . $p->image);

		$delete = Position::where('id', $id)->delete();

		if ($delete) {
			LogActivity::create('Delete Position =>'.$p, 'dashboard');
			return redirect('/dashboard/position')->with('alert', 'Data Berhasil Dihapus');
		}
	}

	public function treatmentPosition(){
		$data = treatmentPosition::get();
		$datas = [
			'data' => $data,
		];
		return view('dashboard.position.treatment_position')->with($datas);
	}

	public function treatmentPositionCreate(){
		$position = Position::where('role_id', '4')->where('status', '1')->orderBy('name', 'asc')->get();
		// $tchoosed = treatmentPosition::get();
		// $tc = [];
		// foreach($tchoosed as $row){
		// 	$tc[] = $row->treatment_code;
		// }
		// $choosed = implode(',', $tc);
		// dd($choosed);
		// $code = explode(',', $choosed);
		$treatment = Treatment::
		// whereNotIn('code', $code)->
		orderBy('id', 'asc')->get();
		$datas = [
			'position' => $position,
			// 'treatment' => $treatment,
		];
		return view('dashboard.position.treatment_position_create')->with($datas);
	}

	public function treatmentPositionStore(Request $request){
		$tp = new TreatmentPosition();
		$tp->name = $request->name;
		$tp->position_id = implode(',', $request->position_id);
		// $tp->treatment_code = implode(',', $request->treatment_code);
		$tp->status = $request->status;
		$tp->save();
		LogActivity::create('Tambah Treatment Position =>'.$tp, 'dashboard');
		return redirect('/dashboard/treatment_position')->with('alert', 'Data Berhasil Disimpan');
	}

	public function treatmentPositionEdit($id){
		$data = TreatmentPosition::find($id);
		$position = Position::where('role_id', '4')->where('status', '1')->orderBy('name', 'asc')->get();
		$datas = [
			'data' => $data,
			'position' => $position,
		];
		return view('dashboard.position.treatment_position_edit')->with($datas);
	}

	public function treatmentPositionUpdate(Request $request){
		$tp = TreatmentPosition::find($request->id);
		$data = [
			'id' => $request->id,
			'name' => $request->name,
			'position_id' => implode(',', $request->position_id),
			'status' => $request->status,
		];
		$update = treatmentPosition::where('id', $request->id)->update($data);
		LogActivity::create('Edit Template Position (lama) =>'.$tp, 'dashboard');
		LogActivity::create('Edit Template Position (baru)=>'.json_encode($data), 'dashboard');
		return redirect('/dashboard/treatment_position')->with('alert', 'Data Berhasil Disimpan');
	}

}
