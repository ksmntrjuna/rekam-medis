<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Brand;
use App\Models\Position;
use App\Models\Treatment;
use Illuminate\Http\Request;
use App\Models\TreatmentPosition;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TreatmentPositionController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware(function ($request, $next) {
      $this->user = Auth::user();
      if ($this->user->role != 'super admin' && Auth::user()->role != 'admin') {
        return abort(404);
      }
      return $next($request);
    });
  }

  public function list()
  {
    $user = Auth::user();
    $brands = Brand::get();

    $data = [];

    if ($user->role === 'super admin') {
      $data = TreatmentPosition::with(['treatment.brand', 'position.brand'])->get();
    } elseif ($user->role === 'admin' && $user->brand) {
      $brandId = $user->brand->id;
      $data = TreatmentPosition::whereHas('treatment', function ($query) use ($brandId) {
        $query->where('brand_id', $brandId);
      })->orWhereHas('position', function ($query) use ($brandId) {
        $query->where('brand_id', $brandId);
      })->with(['treatment.brand', 'position.brand'])->get();
    }

    return view('dashboard.treatment_position.list', compact('data', 'brands'));
  }

  public function create()
  {
    $user = Auth::user(); // Mengambil user yang sedang login
    $brands = Brand::get(); // Ambil semua brand untuk dropdown brand

    // Inisialisasi data Treatment dan Position
    $treatment = [];
    $position = [];

    // Jika user adalah super admin, ambil data Treatment dan Position sesuai dengan brand yang dipilih
    if ($user->role === 'super admin') {
      $selectedBrandId = request('brand'); // Ambil brand yang dipilih dari dropdown

      if ($selectedBrandId) {
        $brand = Brand::find($selectedBrandId);
        $treatment = $brand->treatments;
        $position = $brand->positions;
      }
    } elseif ($user->role === 'admin') {
      // Jika user adalah admin, ambil data Treatment dan Position sesuai dengan brand yang terkait dengan admin
      $treatment = $user->brand->treatments;
      $position = $user->brand->positions;
    }

    return view('dashboard.treatment_position.create', compact('position', 'treatment', 'brands'));
  }

  public function getTreatments($brandId)
  {
    $brand = Brand::find($brandId);
    $treatments = $brand->treatments;

    return response()->json($treatments);
  }

  public function getPositions($brandId)
  {
    $brand = Brand::find($brandId);
    $positions = $brand->positions;

    return response()->json($positions);
  }

  public function store(Request $request)
  {
    $treatment = Treatment::find($request->input('treatment'));
    $position_ids = $request->input('position');

    try {
      DB::beginTransaction();
      $treatment->positions()->sync($position_ids);
      DB::commit();

      return redirect()->to('/dashboard/treatment_position/')->with('success', 'Data Perawatan Posisi Berhasil Dibuat.');
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
    $position = Position::where('brand_id', $edit->treatment->brand_id)->get();
    $treatment = Treatment::get();

    $selectedPositions = DB::table('positions_treatments')
      ->where('treatment_id', $edit->treatment_id)
      ->pluck('position_id')
      ->toArray();

    return view('dashboard.treatment_position.edit', compact('edit', 'position', 'treatment', 'selectedPositions'));
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'position' => 'required|array|min:1',
    ], [
      'position.required' => 'Data Posisi Tidak Boleh Kosong.',
      'position.min' => 'Data Posisi Tidak Boleh Kosong.',
    ]);

    $treatment = Treatment::find($request->input('treatment'));
    $position_ids = $request->input('position');

    if (!empty($position_ids)) {
      try {
        DB::beginTransaction();
        $treatment->positions()->sync($position_ids);
        DB::commit();

        return redirect()->to('/dashboard/treatment_position/')->with('success', 'Data Perawatan Posisi Berhasil Diupdate.');
      } catch (\Exception $e) {
        DB::rollback();

        return redirect()->to('/dashboard/treatment_position/')->with('error', 'Terjadi kesalahan. Data tidak berhasil disimpan.');
      }
    } else {
      return redirect()->to('/dashboard/treatment_position/')->with('info', 'Tidak ada perubahan dilakukan.');
    }
  }

  public function destroy(TreatmentPosition $treatmentPosition)
  {
    $treatmentPosition->delete();
    TreatmentPosition::where('treatment_id', $treatmentPosition->treatment_id)->delete();
    return redirect()->to('/dashboard/treatment_position/')->with('delete', 'Data Perawatan Posisi Telah Dihapus');
  }
}
