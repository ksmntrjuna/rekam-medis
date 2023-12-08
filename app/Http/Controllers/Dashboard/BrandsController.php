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

class BrandsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            if ($this->user->role != 'super admin') {
                return abort(404);
            }
            return $next($request);
        });
    }

    public function list()
    {
        $brands = Brand::get();
        return view('dashboard.brands.list', data: compact('brands'));
    }

    public function create()
    {
        return view('dashboard.brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $brands = new Brand();
        $brands->name = $request->input('name');
        $brands->save();

        return redirect()->to('/dashboard/brands')->with('success', 'Data Brand Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $brands =  Brand::find($id);
        return view('dashboard.brands.edit', data: compact('brands'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $brands = Brand::find($id);

        $brands->name = $request->input('name');
        $brands->save();

        return redirect()->to('dashboard/brands')->with('success', 'Data Brand Berhasil Diupdate');
    }

    public function destroy(Brand $destroy)
    {
        $destroy->delete();
        return redirect()->to('dashboard/brands')->with('alert', 'Data Brand Berhasil Dihapus');
    
    }
}
