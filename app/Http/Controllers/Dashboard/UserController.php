<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Outlet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            if($this->user->role!='admin' && request()->segment(3)!='edit'){
                return abort(404);
            }
            return $next($request);
        });
    }

    public function list(){
        // $data = json_decode('{"id":"965bb1af-c71b-488d-a659-6464465f4a3d","name":"user baru","email":"baru@natasha.co.id","role":"fo","branch":"AMB01","updated_at":"2020-12-29T14:53:52.000000Z","created_at":"2020-12-29T14:53:52.000000Z"}');
        // dd($data->id);
    	$data = User::orderBy('created_at', 'desc')->get();
    	$datas = [
    		'data' => $data,
    	];
        // LogActivity::create('Lihat Menu User');
    	return view('dashboard.user.list')->with($datas);
    }

    public function create(){
    	$role = Role::orderBy('name', 'asc')->get();
    	$outlet = Outlet::get();
    	$datas = [
    		'role' => $role,
    		'outlet' => $outlet,
    	];
    	return view('dashboard.user.create')->with($datas);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required',
            'branch' => 'required',
        ],[
            'unique' => 'NIK :input sudah ada.',
        ]);
        $user = new User;
        $user->id = Str::uuid();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->username.'@natasha.co.id';
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->branch = $request->branch;
        $user->save();
        LogActivity::create('Tambah User Baru =>'.$user, 'dashboard');
        return redirect('/dashboard/user')->with('message', 'Data Berhasil Disimpan');
    }

    public function edit($id){
    	$data = User::find($id);
    	$role = Role::orderBy('name', 'asc')->get();
    	$outlet = Outlet::get();
    	$datas = [
    		'data' => $data,
    		'role' => $role,
    		'outlet' => $outlet,
    	];
    	return view('dashboard.user.edit')->with($datas);
    }

    public function update(Request $request){
    	$user = User::find($request->id);
        LogActivity::create('Edit User (lama) =>'.$user, 'dashboard');
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->username.'@natasha.co.id';
        $user->role = $request->role;
        $user->branch = $request->branch;
        $user->save();
        LogActivity::create('Edit User (baru) =>'.$user, 'dashboard');
        return redirect('/dashboard/user')->with('message', 'Data Berhasil Disimpan');
    }

    public function resetpassword(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data = array(
            'password' => bcrypt($request->password)
        );
        DB::table('users')->where('id', $request->id)->update($data);
        LogActivity::create('Ubah Password id '.$request->id, 'dashboard');
        return redirect('dashboard/user')->with('success', 'Password Berhasil di Ubah');
    }
}
