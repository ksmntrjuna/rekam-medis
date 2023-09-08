<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Treatment;

class MemberController extends Controller
{
	public function lookup(Request $request){
		$kode_member = $request->kode_member;
		$data['kode_member'] = $kode_member;
        $patient = Patient::where('nobase', $kode_member)->first();
        if($patient){
            $result[] = (object)[
                'kode_member' => $patient->nobase,
                'nama' => $patient->name,
                'telp' => $patient->telp,
            ];
            $response = [
                'status' => 'success',
                'data' => $result,
            ];
            return response()->json($response);
        }else{
			return response()->json(
				[
					'status' => 'error', 
					'message' => 'Data Not Found'
				]
			);
		}
	}

	public function lookup2(Request $request){
		$kode_member = $request->kode_member;
		$data['kode_member'] = $kode_member;
        $treatment = Treatment::get(['code', 'name']);
        $patient = Patient::where('nobase', $kode_member)->first();
        if($patient){
            $result[] = (object)[
                'kode_member' => $patient->nobase,
                'nama' => $patient->name,
                'telp' => $patient->telp,
            ];
            $response = [
                'status' => 'success',
                'data' => $result,
                'treatment' => $treatment,
            ];
            return response()->json($response);
		}else{
			return response()->json(
				[
					'status' => 'error', 
					'message' => 'Data Not Found'
				]
			);
		}
	}
}
