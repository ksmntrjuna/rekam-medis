<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LogActivity;
use App\Models\User;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;

class JwtAuthController extends Controller
{
	public $token = true;

	public function register(Request $request)
	{

		$validator = Validator::make($request->all(), 
			[ 
				'name' => 'required',
				'email' => 'required|email',
				'password' => 'required',  
				'c_password' => 'required|same:password', 
			]);  

		if ($validator->fails()) {  

			return response()->json(['error'=>$validator->errors()], 401); 

		}   


		$user = new User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->save();

		if ($this->token) {
			return $this->login($request);
		}

		return response()->json([
			'success' => true,
			'data' => $user
		], Response::HTTP_OK);
	}

	public function login(Request $request)
	{
		$input = $request->only('username', 'password');
		$jwt_token = null;

		if (!$jwt_token = JWTAuth::attempt($input)) {

			return response()->json([
				'success' => false,
				'message' => 'Invalid Email or Password',
			], Response::HTTP_UNAUTHORIZED);
		}
		$user = Auth::user();
		// if($user->role!='fo' && $user->role!='therapist'){
		if($user->role=='dokter'){
			return response()->json([
				'success' => false,
				'message' => 'You not Allowed to Login',
			], Response::HTTP_UNAUTHORIZED);
		}
		LogActivity::create('Login', 'mobile');
		return response()->json([
			'success' => true,
			'data' => (object)[
				'nik' => $user->username,
				'name' => $user->name,
				'role' => strtoupper($user->role),
				'branch' => $user->branch,
				'outlet_name' => Outlet::check($user->branch)->outlet_name,
				'outlet_address' => Outlet::check($user->branch)->outlet_address,
				'token' => $jwt_token,
			],
		]);
	}

	public function logout(Request $request)
	{
		$this->validate($request, [
			'token' => 'required'
		]);

		try {
			JWTAuth::invalidate($request->token);
			LogActivity::create('Logout', 'mobile');
			return response()->json([
				'success' => true,
				'message' => 'User logged out successfully'
			]);
		} catch (JWTException $exception) {
			return response()->json([
				'success' => false,
				'message' => 'Sorry, the user cannot be logged out'
			], Response::HTTP_INTERNAL_SERVER_ERROR);
		}
	}

	public function getUser(Request $request)
	{
		// dd(Auth::user()->name);
		// $this->validate($request, [
		// 	'token' => 'required'
		// ]);

		// $user = JWTAuth::authenticate($request->token);
		$user = Auth::user();
		// dd($user);

		return response()->json(['user' => $user]);
	}
}