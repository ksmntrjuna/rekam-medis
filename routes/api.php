<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JwtAuthController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\PhotoController;
use App\Http\Controllers\Api\PositionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
// 	return $request->user();
// });

// Route::post('register', [JwtAuthController::class, 'register']);
Route::post('login', [JwtAuthController::class, 'login']);

Route::group(['middleware' => 'jwt.middleware'], function () {

	Route::get('user-info', [JwtAuthController::class, 'getUser']);
	Route::post('lookup/member', [MemberController::class, 'lookup']);
	Route::post('lookup/member2', [MemberController::class, 'lookup2']);
	Route::post('photo/upload', [PhotoController::class, 'upload']);
	Route::get('position/{nobase}', [PositionController::class, 'list']);
	Route::get('position/{nobase}/{treatment}', [PositionController::class, 'list2']);
	Route::post('logout', [JwtAuthController::class, 'logout']);

});
