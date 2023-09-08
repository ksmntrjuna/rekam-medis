<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Photo;
use App\Models\Position;
use App\Models\Treatment;
use App\Models\LogActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function list(Request $request){
        $get = (object)[
            'nobase' => $request->nobase,
        ];
        $not = ['dokter', 'admin', 'cabang'];
        $auth = Auth::user();
        $q = Patient::select(
            'patients.id', 
            'patients.nobase as kode_member',
            'patients.name as nama',
            'patients.telp',
            'patients.branch',
            'patients.last'
        )
        ->with('photo')
        ->has('photo')
        ;
        if(!in_array($auth->role, $not)){ 
            $q->whereHas('photo', function($qu) use($auth){
                $qu->where('photos.user_id', $auth->id);
            });
        }
        if($auth->role=='cabang'){
            $q->whereHas('photo', function($qu) use($auth){
                $qu->where('photos.branch', $auth->branch);
            });
        }
        if($request->nobase){
            $q->where('patients.nobase', $request->nobase);
        }
        $data = $q->groupBy('patients.nobase')
        ->orderBy('patients.last', 'desc')
        ->limit(50)
        ->get();
        $datas = [
            'data' => $data,
            'get' => $get,
        ];
        return view('dashboard.member.list')->with($datas);
    }

    public function perawatan($nobase){
        $auth = Auth::user();
        $patient = Patient::where('nobase', $nobase)->first();
        $q = Photo::select(DB::raw('DATE(date) dates'), 'nobase', 'branch')
        ->where('nobase', $nobase);
        if($auth->role!='dokter' && $auth->role!='admin' && $auth->role!='cabang'){
            $q->where('photos.user_id', $auth->id);
        }
        if($auth->role=='cabang'){
            $q->where('photos.branch', $auth->branch);
        }
        $data = $q->orderBy('dates', 'desc')
        ->groupBy('dates')->get();

        $datas = [
            'patient' => $patient,
            'data' => $data,
        ];
        LogActivity::create('Lihat Perawatan =>'.$patient, 'dashboard');
        return view('dashboard.member.perawatan')->with($datas);
    }

    public function compare($nobase, $date, $treatment){
        if($treatment=='trm'){
            $position = Position::where('role_id', '3')->where('status', '1')->get();
        }else{
            $pid = [];
            $trm = Treatment::join('treatment_position', 'treatment_position.id', 'treatment.treatment_position_id')
            ->where('code', $treatment)->first();
            if($trm->position_id){
                $pid = explode(',', $trm->position_id);
            }
            $position = Position::select('id', 'name', 'image')->where('role_id', '4')->whereIn('id', $pid)->where('status', 1)->orderBy('name', 'asc')->get();
        }
        $patient = Patient::where('nobase', $nobase)->first();
        $datas = [
            'patient' => $patient,
            'position' => $position,
            'treatment' => $treatment,
        ];
        return view('dashboard.member.compare')->with($datas);
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

    public function position2(Request $request){
        $nobase = $request->nobase;
        $treatment = $request->treatment;
        $pid = []; $data = [];
        $treatments = Treatment::join('treatment_position', 'treatment_position.id', 'treatment.treatment_position_id')
        ->where('code', $treatment)->first();
        if($treatments){
            if($treatments->position_id){
                $pid = explode(',', $treatments->position_id);
            }
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
