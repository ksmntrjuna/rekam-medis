<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treatment;
use App\Models\TreatmentPosition;
use App\Models\LogActivity;
use Illuminate\Support\Facades\Auth;

class TreatmentController extends Controller
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
		$data = Treatment::get();
		$datas = [
			'data' => $data,
		];
		return view('dashboard.treatment.list')->with($datas);
	}

	public function create(){
		$data = Treatment::get();
		$datas = [
			'data' => $data,
		];
		return view('dashboard.treatment.create')->with($datas);
	}

	public function store(Request $request){
		$t = new Treatment();
		$t->code = $request->code;
		$t->name = $request->name;
		// $t->status = $request->status;
		$t->save();
		LogActivity::create('Tambah Treatment (lama) =>'.$t, 'dashboard');
		return redirect('dashboard/treatment/list')->with(['alert', 'Data Berhasil Disimpan']);
	}

	public function edit($id){
		$data = Treatment::find($id);
		// $position = TreatmentPosition::get();
		$datas = [
			'data' => $data,
			// 'position' => $position,
		];
		return view('dashboard.treatment.edit')->with($datas);
	}

	public function update(Request $request){
		$t = Treatment::find($request->id);
		$t->code = $request->code;
		$t->name = $request->name;
		// $t->status = $request->status;
		$t->save();

		$data = [
			'id' => $request->id,
			'code' => $request->code,
			'name' => $request->name,
			// 'status' => $request->status,
		];
		$update = Treatment::where('id', $request->id)->update($data);
		LogActivity::create('Edit Template Position (lama) =>'.$t, 'dashboard');
		LogActivity::create('Edit Template Position (baru)=>'.json_encode($data), 'dashboard');
		return redirect('dashboard/treatment/list')->with(['alert', 'Data Berhasil Disimpan']);
	}
}
