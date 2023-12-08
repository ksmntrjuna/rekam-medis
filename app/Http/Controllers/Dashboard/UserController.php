<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Role;
use App\Models\User;
use App\Models\Brand;
use App\Models\Outlet;
use App\Models\LogActivity;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            if ($this->user->role != 'super admin' && Auth::user()->role != 'admin' && request()->segment(3) != 'edit') {
                return abort(404);
            }
            return $next($request);
        });
    }

    public function list()
    {
        // $data = json_decode('{"id":"965bb1af-c71b-488d-a659-6464465f4a3d","name":"user baru","email":"baru@natasha.co.id","role":"fo","branch":"AMB01","updated_at":"2020-12-29T14:53:52.000000Z","created_at":"2020-12-29T14:53:52.000000Z"}');
        // dd($data->id);
        $data = User::orderBy('created_at', 'desc')->get();
        $datas = [
            'data' => $data,
        ];
        // LogActivity::create('Lihat Menu User');
        return view('dashboard.user.list')->with($datas);
    }

    public function create(Request $request)
    {
        $userRole = Auth::user()->role;
        $brands = Brand::all();
        $outlets = Outlet::all();
        $selectedBrand = null;
        $selectedOutlet = null;

        if ($userRole == 'admin') {
            $brand = Auth::user()->brand;
            $outlets = Outlet::where('brand_id', $brand->id)->get();
            $selectedBrand = $brand->id;
            $selectedOutlet = $outlets->first()->code; // Pilih outlet pertama sebagai default
        }

        $roles = Role::orderBy('name', 'asc')->get();

        return view('dashboard.user.create', compact('brands', 'outlets', 'roles', 'selectedBrand', 'selectedOutlet'));
    }

    public function getOutletsByBrand($brandId)
    {
        $userRole = Auth::user()->role;

        if ($userRole == 'super admin') {
            // Fetch outlets for super admin directly based on the selected brand
            $outlets = Outlet::where('brand_id', $brandId)->get();
        } elseif ($userRole == 'admin') {
            // Fetch outlets for admin from the authenticated user's brand
            $brand = Brand::find($brandId);
            if (!$brand) {
                return response()->json([]);
            }
            $outlets = $brand->outlets;
        } else {
            // Handle other roles or provide an empty response as needed
            return response()->json([]);
        }

        return response()->json($outlets);
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:users',
        ];

        // Tambahkan validasi untuk brand dan branch jika peran pengguna bukan super admin
        if (Auth::user()->role != 'super admin') {
            $rules['brand'] = 'required';
            $rules['branch'] = 'required';
        }

        $this->validate($request, $rules, [
            'unique' => 'NIK :input sudah ada.',
        ]);

        $user = new User;
        $user->id = Str::uuid();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;

        // Set brand_id dan branch sesuai dengan peran pengguna
        if (Auth::user()->role == 'admin') {
            $user->brand_id = Auth::user()->brand_id;
            $user->branch = $request->branch;
        } elseif (Auth::user()->role == 'super admin') {
            // Hanya set brand dan branch jika diisi
            if ($request->filled('brand')) {
                $user->brand_id = $request->brand;
            }
            if ($request->filled('branch')) {
                $user->branch = $request->branch;
            }
        }

        $user->save();

        LogActivity::create('Tambah User Baru =>' . $user, 'dashboard');

        return redirect('/dashboard/user')->with('message', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $data = User::find($id);
        $role = Role::orderBy('name', 'asc')->get();
        $brands = Brand::all();

        // Pengecekan apakah brand ada sebelum mengakses properti id
        $outlets = $data->brand ? Outlet::where('brand_id', $data->brand->id)->get() : collect();

        $datas = [
            'data' => $data,
            'role' => $role,
            'brands' => $brands,
            'outlets' => $outlets,
        ];

        return view('dashboard.user.edit')->with($datas);
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        LogActivity::create('Edit User (lama) =>' . $user, 'dashboard');
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->branch = $request->branch;
        $user->save();
        LogActivity::create('Edit User (baru) =>' . $user, 'dashboard');
        return redirect('/dashboard/user')->with('message', 'Data Berhasil Disimpan');
    }

    public function resetpassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data = array(
            'password' => bcrypt($request->password)
        );
        DB::table('users')->where('id', $request->id)->update($data);
        LogActivity::create('Ubah Password id ' . $request->id, 'dashboard');
        return redirect('dashboard/user')->with('success', 'Password Berhasil di Ubah');
    }
}
