<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Position;
use App\Models\Treatment;
use Illuminate\Http\Request;
use App\Models\TreatmentPosition;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TreatmentPositionController extends Controller
{
  // public function __construct()
  // {
  //   $this->middleware('auth');
  //   $this->middleware(function ($request, $next) {
  //     $this->user = Auth::user();
  //     if ($this->user->role != 'admin') {
  //       return abort(404);
  //     }
  //     return $next($request);
  //   });
  // }

  public function list()
  {
    $data = TreatmentPosition::get();
    $datas = [
      'data' => $data,
    ];
    return view('dashboard.treatment_position.list')->with($datas);
  }

  public function create()
  {
    $position = Position::get();
    $treatment = Treatment::get();
    $treatmentPosition = TreatmentPosition::get();


    return view('dashboard.treatment_position.create', compact('position', 'treatment', 'treatmentPosition'));
  }

  public function store(Request $request)
  {
    $treatment = Treatment::find($request->input('treatment'));
    $position_ids = $request->input('position');

    try {
      DB::beginTransaction();
      $treatment->positions()->sync($position_ids);
      DB::commit();

      return redirect()->to('/dashboard/treatment_position/')->with('success', 'Data Posisi Perawatan Berhasil Dibuat.');
    } catch (\Exception $e) {
      DB::rollback();

      return redirect()->to('/dashboard/treatment_position/')->with('error', 'Terjadi kesalahan. Data tidak berhasil disimpan.');
    }
  }

  public function getPositionDetails($treatmentId)
  {
    $treatment = Treatment::find($treatmentId);
    $positions = $treatment->positions;

    return response()->json(['treatment' => $treatment, 'positions' => $positions]);
  }

  public function edit(TreatmentPosition $edit)
  {
    $position = Position::get();
    $treatment = Treatment::get();

    // Menampilkan view edit dengan data yang diperlukan
    return view('dashboard.treatment_position.edit', compact('edit', 'position', 'treatment'));
  }


  public function update(Request $request, $id)
  {
    $treatment = Treatment::find($request->input('treatment'));
    $position_ids = $request->input('position');

    // Cek apakah ada pemilihan posisi
    if (!empty($position_ids)) {
      try {
        DB::beginTransaction();
        $treatment->positions()->sync($position_ids);
        DB::commit();

        return redirect()->to('/dashboard/treatment_position/')->with('success', 'Data Posisi Perawatan Berhasil Diupdate.');
      } catch (\Exception $e) {
        DB::rollback();

        return redirect()->to('/dashboard/treatment_position/')->with('error', 'Terjadi kesalahan. Data tidak berhasil disimpan.');
      }
    } else {
      // Tidak ada pemilihan posisi, tidak perlu melakukan perubahan
      return redirect()->to('/dashboard/treatment_position/')->with('info', 'Tidak ada perubahan dilakukan.');
    }
  }

  public function destroy(TreatmentPosition $treatmentPosition)
  {
    $treatmentPosition->delete();
    TreatmentPosition::where('treatment_id', $treatmentPosition->treatment_id)->delete();
    return redirect()->to('/dashboard/treatment_position/')->with('delete', 'Data Posisi Perawatan Telah Dihapus');
  }
}
