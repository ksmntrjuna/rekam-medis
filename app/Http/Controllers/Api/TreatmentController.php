<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TreatmentPosition;
use App\Models\Treatment;
use App\Models\Position;
use App\Models\Photo;

class TreatmentController extends Controller
{
	public function list(Request $request){
		$data = Treatment::select('id', 'code', 'name')->where('code', 'like', $request->code.'%')->get();
		if($data){
			return response()->json(['status' => 'success', 'data' => $data]);
		}else{
			return response()->json(['status' => 'error', 'message' => 'Data TIdak Ditemukan ']);
		}
	}

	public function list2(Request $request){
		$nobase = $request->nobase;
		$result_curl = [];
		if($result_curl){
			$code = [];
			foreach($result_curl as $row){
				$code[] = $row->kode_produk;
			}

			$data = Treatment::select('id', 'code', 'name')->where('code', $code)->get();
			return response()->json(['status' => 'success', 'data' => $data]);
		}else{
			return response()->json(['status' => 'error', 'message' => 'Data TIdak Ditemukan ']);
		}
	}
}
