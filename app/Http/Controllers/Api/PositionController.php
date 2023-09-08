<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;
use App\Models\Photo;
use App\Models\Treatment;

class PositionController extends Controller
{
	public function list($nobase){
		$positions = Position::select('id', 'name', 'image')->where('role_id', '3')->where('status', 1)->get();
		if($positions){
			$done = [];
			$photos = Photo::whereDate('date', date('Y-m-d'))->where('nobase', $nobase)->get();
			foreach($photos as $p){
				$done[] = $p->position; 
			}
			$datas = [];
			$s = 1;
			foreach($positions as $row){
				if(!$d = in_array($row->id, $done)){
					$s = 0;
				}else{
					$s = 1;
				}
				$data[] = (object)[
					'id' => $row->id,
					'name' => $row->name,
					'image' => isset($row->photo) ? asset('/uploads/positions/'.$row->image) : NULL,
					'status' => $s,
				];
			}
			$name = array_column($data, 'name');
			array_multisort($name, SORT_ASC, $data);
			return response()->json(['status' => 'success', 'data' => $data]);
		}else{
			return response()->json(['status' => 'error', 'message' => 'Data TIdak Ditemukan ']);
		}
	}

	//from treatment
	public function list2($nobase, $treatment){
		$pid = [];
		$treatments = Treatment::join('treatment_position', 'treatment_position.id', 'treatment.treatment_position_id')
		->where('code', $treatment)->first();
		if($treatments->position_id){
			$pid = explode(',', $treatments->position_id);
		}
		$positions = Position::select('id', 'name', 'image')->where('role_id', '4')->whereIn('id', $pid)->where('status', 1)->get();
		if($positions){
			$done = [];
			$photos = Photo::whereDate('date', date('Y-m-d'))->where('nobase', $nobase)->where('treatment_code', $treatment)->get();
			foreach($photos as $p){
				$done[] = $p->position; 
			}
			$datas = [];
			$s = 1;
			foreach($positions as $row){
				if(!$d = in_array($row->id, $done)){
					$s = 0;
				}else{
					$s = 1;
				}
				$data[] = (object)[
					'id' => $row->id,
					'name' => $row->name,
					'image' => isset($row->photo) ? asset('/uploads/positions/'.$row->image) : NULL,
					'status' => $s,
				];
			}
			$name = array_column($data, 'name');
			array_multisort($name, SORT_ASC, $data);
			return response()->json(['status' => 'success', 'data' => $data]);
		}else{
			return response()->json(['status' => 'error', 'message' => 'Data TIdak Ditemukan ']);
		}
	}
}
