<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treatment;
use App\Models\TreatmentPosition;
use App\Models\LogActivity;
use App\Models\Brand;
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
		$brands = Brand::all();
		$datas = [
			'data' => $data,
			'brands' => $brands,

		];
		return view('dashboard.treatment.create')->with($datas);
	}

	public function store(Request $request){
		$existingTreatment = Treatment::where('code', $request->code)->first();

		if ($existingTreatment) {
			return redirect('dashboard/treatment/create')->with('error', 'Kode harus unik! Tidak boleh sama.');
		}

		$t = new Treatment();
		$t->code = $request->code;
		$t->name = $request->name;
		$t->brand_id = $request->brand_id;

		$t->save();
		LogActivity::create('Tambah Treatment (lama) =>'.$t, 'dashboard');
		return redirect('dashboard/treatment/list')->with(['alert', 'Data Berhasil Disimpan']);
	}

	public function edit($id){
		$data = Treatment::find($id);
		$brands = Brand::all();
		$datas = [
			'data' => $data,
			'brands' => $brands,
		];
		return view('dashboard.treatment.edit')->with($datas);
	}

	public function update(Request $request){
		// $treatment = Treatment::find($request->id);
		$t = Treatment::find($request->id);

		$existingTreatment = Treatment::where('code', $request->code)
			->where('id', '!=', $request->id)
			->first();

		if ($existingTreatment) {
			return redirect('dashboard/treatment/edit/' . $request->id)->with('error', 'Kode harus unik! Tidak boleh sama.');
		}
		
		$t->code = $request->code;
		$t->name = $request->name;
		$t->brand_id = $request->brand_id;
		$t->save();

		$data = [
			'id' => $request->id,
			'code' => $request->code,
			'name' => $request->name,
			'brand_id' => $request->brand_id,
			// 'status' => $request->status,
		];
		$update = Treatment::where('id', $request->id)->update($data);
		LogActivity::create('Edit Template Position (lama) =>'.$t, 'dashboard');
		LogActivity::create('Edit Template Position (baru)=>'.json_encode($data), 'dashboard');
		return redirect('dashboard/treatment/list')->with(['alert', 'Data Berhasil Disimpan']);
	}
}
