<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Photo;
use App\Models\Position;
use App\Models\Treatment;
use App\Models\LogActivity;
use App\Models\TreatmentPosition;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list(Request $request)
    {
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
            'patients.branch as branch',
            'patients.last',
            'patients.updated_at',
        )
            ->with('photo')
            ->has('photo');

        // Filtering logic for super admin
        if ($auth->role === 'super_admin') {
            // No additional filtering for super admin
        }

        // Filtering logic for admin
        elseif ($auth->role === 'admin') {
            // Filter by brand_id matching the admin's brand_id
            $q->whereHas('photo', function ($qu) use ($auth) {
                $qu->where('photos.brand_id', $auth->brand_id);
            });
        }

        // Filtering logic for cabang
        elseif ($auth->role === 'cabang') {
            // Filter by branch matching the cabang's branch
            $q->whereHas('photo', function ($qu) use ($auth) {
                $qu->where('photos.branch', $auth->branch);
            });
        }

        if ($request->nobase) {
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

    public function perawatan($nobase)
    {
        $auth = Auth::user();
        $patient = Patient::where('nobase', $nobase)->first();

        if ($auth->role == 'super admin') {
            $data = Photo::select(DB::raw('DATE(date) dates'), 'nobase', 'branch', 'created_at', 'treatment_code', 'brand_id', 'treatment_id')
            ->where('nobase', $nobase)
                ->with(['treatmentPosition.position'])
                ->orderBy('dates', 'desc')
                ->groupBy('dates')
                ->get();
        } elseif ($auth->role == 'admin') {
            $data = Photo::select(DB::raw('DATE(date) dates'), 'nobase', 'branch', 'created_at', 'treatment_code', 'brand_id', 'treatment_id')
            ->where('nobase', $nobase)
                ->where('brand_id', $auth->brand_id) // Filter based on brand_id
                ->with(['treatmentPosition.position'])
                ->orderBy('dates', 'desc')
                ->groupBy('dates')
                ->get();
        } else {
            // // For other roles, proceed with the existing logic
            // $data = Photo::select(DB::raw('DATE(date) dates'), 'nobase', 'branch', 'created_at', 'treatment_code')
            // ->where('nobase', $nobase)
            //     ->with(['treatmentPosition.position'])
            //     ->when($auth->role != 'dokter' && $auth->role != 'admin' && $auth->role != 'cabang', function ($query) use ($auth) {
            //         $query->where('user_id', $auth->id);
            //     })
            //     ->when($auth->role == 'cabang', function ($query) use ($auth) {
            //         $query->where('branch', $auth->branch);
            //     })
            //     ->orderBy('dates', 'desc')
            //     ->groupBy('dates')
            //     ->get();
        }

        $datas = [
            'patient' => $patient,
            'data' => $data,
        ];

        LogActivity::create('Lihat Perawatan =>' . $patient, 'dashboard');
        return view('dashboard.member.perawatan')->with($datas);
    }

    public function compare($nobase, $photo, $treatment)
    {
        $photos = Photo::where('nobase', $nobase)->get();
        $positions = [];
        foreach ($photos as $photo) {
            $detailInfo = DB::table('positions_treatments')
                ->join('positions', 'positions_treatments.position_id', '=', 'positions.id')
                ->where('positions_treatments.id', $photo->postreat_id)
                ->select('positions.name')
                ->first();
            $positions[$photo->id] = $detailInfo ? $detailInfo->name : 'gada';
        }

        if ($treatment == 'trm') {
            $position = Position::where('role_id', '3')->where('status', '1')->get();
        } else {
            $pid = [];
            $trm = Treatment::join('positions_treatments', 'positions_treatments.id', 'treatment.positions_treatments_id')
                ->where('code', $treatment)->first();
            if ($trm->position_id) {
                $pid = explode(',', $trm->position_id);
            }
            $position = Position::select('id', 'name', 'image')->where('role_id', '4')->whereIn('id', $pid)->where('status', 1)->orderBy('name', 'asc')->get();
        }

        $patient = Patient::where('nobase', $nobase)->first();
        foreach ($position as $i => $s) {
            $photo[$i] = Photo::where('nobase', $nobase)
                ->where('postreat_id', $s->id)
                ->orderBy('created_at', 'desc')
                ->get();
        }

        $type = request('type');

        // Saring data berdasarkan jenis
        if ($type === 'KONSULTASI') {
            $photos = Photo::where('nobase', $nobase)
                ->where('treatment_code', 'KONSULTASI')
                ->get();
            // Tambahkan logika lain yang sesuai dengan jenis perawatan
        } else {
            // Saring data perawatan
            $photos = Photo::where('nobase', $nobase)
                ->where('treatment_code', '!=', 'KONSULTASI')
                ->get();
            // Tambahkan logika lain yang sesuai dengan jenis perawatan
        }

        $uniqueTreatmentCodes = collect($photos)->pluck('treatment_code')->unique();

        $datas = [
            'patient' => $patient,
            'positions' => $positions,
            'photos' => $photos,
            'uniqueTreatmentCodes' => $uniqueTreatmentCodes,
            'position' => $position,
            'treatment' => $treatment,
            'photo' => $photo,
        ];
        return view('dashboard.member.compare')->with($datas);
    }


    public function lookup2(Request $request)
    {
        $kode_member = $request->kode_member;
        $data['kode_member'] = $kode_member;
        $treatment = Treatment::get(['code', 'name']);
        $patient = Patient::where('nobase', $kode_member)->first();
        if ($patient) {
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
        } else {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Data Not Found'
                ]
            );
        }
    }

    public function position2(Request $request)
    {
        $nobase = $request->nobase;
        $treatment = $request->treatment;
        $pid = [];
        $data = [];
        $treatments = Treatment::join('treatment_position', 'treatment_position.id', 'treatment.treatment_position_id')
            ->where('code', $treatment)->first();
        if ($treatments) {
            if ($treatments->position_id) {
                $pid = explode(',', $treatments->position_id);
            }
        }
        $positions = Position::select('id', 'name', 'image')->where('role_id', '4')->whereIn('id', $pid)->where('status', 1)->get();
        if ($positions) {
            $done = [];
            $photos = Photo::whereDate('date', date('Y-m-d'))->where('nobase', $nobase)->where('treatment_code', $treatment)->get();
            foreach ($photos as $p) {
                $done[] = $p->position;
            }
            $datas = [];
            $s = 1;
            foreach ($positions as $row) {
                if (!$d = in_array($row->id, $done)) {
                    $s = 0;
                } else {
                    $s = 1;
                }
                $data[] = (object)[
                    'id' => $row->id,
                    'name' => $row->name,
                    'image' => isset($row->photo) ? asset('/uploads/positions/' . $row->image) : NULL,
                    'status' => $s,
                ];
            }
            $name = array_column($data, 'name');
            array_multisort($name, SORT_ASC, $data);
            return response()->json(['status' => 'success', 'data' => $data]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Data TIdak Ditemukan ']);
        }
    }

    public function getPosisi($id_perawatan)
    {
        $data = TreatmentPosition::with(['position'])->where('treatment_id', $id_perawatan)->get();
        return response()->json(['status' => 'success', 'data' => $data]);
    }
}
