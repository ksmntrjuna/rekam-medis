<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\PhotoController;
use App\Http\Controllers\Dashboard\BrandsController;
use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\PositionController;
use App\Http\Controllers\Dashboard\TreatmentController;
use App\Http\Controllers\Dashboard\TreatmentPositionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/download', function () {
	$filepath = asset('/file/galeri-natasha-02.apk');
	return redirect($filepath);
});

Route::get('/download/dummy', function () {
	$filepath = asset('/file/galeri-natasha-dummy.apk');
	return redirect($filepath);
});

Route::get('/', function () {
	// return view('welcome');
	return redirect('/login');
});

Route::get('/dashboard', function () {
	// return view('dashboard');
	return redirect('/dashboard/patient');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('dashboard/patient', [MemberController::class, 'list'])->name('dashboard.patient');
Route::get('dashboard/perawatan/{nobase}', [MemberController::class, 'perawatan']);
Route::get('dashboard/compare/{nobase}/{date}/{treatment}', [MemberController::class, 'compare']);

Route::get('dashboard/user', [UserController::class, 'list'])->name('dashboard.user');
Route::get('dashboard/user/create', [UserController::class, 'create']);
Route::get('/get-outlets-by-brand/{brandId}', [UserController::class, 'getOutletsByBrand'])->name('getOutletsByBrand');
Route::post('dashboard/user/store', [UserController::class, 'store']);
Route::get('dashboard/user/edit/{id}', [UserController::class, 'edit']);
Route::post('dashboard/user/update', [UserController::class, 'update']);
Route::post('dashboard/user/password', [UserController::class, 'resetPassword']);

Route::get('dashboard/photo', [PhotoController::class, 'list'])->name('dashboard.photo');
Route::get('dashboard/photo/create', [PhotoController::class, 'create'])->name('dashboard.photo.create');
Route::post('dashboard/photo/upload', [PhotoController::class, 'upload']);
Route::get('dashboard/photo/edit/{nobase}/{treatment_id}', [PhotoController::class, 'edit']);
Route::put('dashboard/photo/update', [PhotoController::class, 'update']);
Route::get('dashboard/photo/delete/{nobase}/{treatment_id}', [PhotoController::class, 'delete']);
Route::post('dashboard/photo/fetch-data', [PhotoController::class, 'fetchData']);

Route::get('dashboard/position', [PositionController::class, 'list'])->name('dashboard.position');
Route::get('dashboard/position/create', [PositionController::class, 'create'])->name('dashboard.position.create');
Route::post('dashboard/position/upload', [PositionController::class, 'upload']);
Route::get('dashboard/position/edit/{id}', [PositionController::class, 'edit']);
Route::post('dashboard/position/update', [PositionController::class, 'update']);
Route::get('dashboard/position/delete/{id}', [PositionController::class, 'delete']);

Route::get('dashboard/treatment_position', [TreatmentPositionController::class, 'list'])->name('dashboard.treatmentPosition');
Route::get('dashboard/treatment_position/create', [TreatmentPositionController::class, 'create']);
Route::post('dashboard/treatment_position/store', [TreatmentPositionController::class, 'store']);
Route::get('dashboard/treatment_position/edit/{edit}', [TreatmentPositionController::class, 'edit']);
Route::put('dashboard/treatment_position/update/{id}', [TreatmentPositionController::class, 'update']);
Route::delete('dashboard/treatment_position/{treatmentPosition}', [TreatmentPositionController::class, 'destroy']);
Route::get('/get-position-details/{treatmentId}', [TreatmentPositionController::class, 'getPositionDetails']);
Route::get('/get-treatments/{brandId}', [TreatmentPositionController::class, 'getTreatments']);
Route::get('/get-positions/{brandId}', [TreatmentPositionController::class, 'getPositions']);

Route::get('dashboard/treatment/list', [TreatmentController::class, 'list'])->name('dashboard.treatment');
Route::get('dashboard/treatment/create', [TreatmentController::class, 'create']);
Route::post('dashboard/treatment/store', [TreatmentController::class, 'store']);
Route::get('dashboard/treatment/edit/{id}', [TreatmentController::class, 'edit']);
Route::post('dashboard/treatment/update', [TreatmentController::class, 'update']);
Route::delete('dashboard/treatment/delete/{id}', [TreatmentController::class, 'delete']);

Route::get('/lookup/member', [MemberController::class, 'lookup2']);
Route::get('/position/list', [MemberController::class, 'position2']);
Route::get('/photo/posisi/{id_perawatan}', [MemberController::class, 'getPosisi']);

Route::get('dashboard/brands', [BrandsController::class, 'list'])->name('dashboard.brands');
Route::get('dashboard/brands/create', [BrandsController::class, 'create']);
Route::post('dashboard/brands/store', [BrandsController::class, 'store']);
Route::get('dashboard/brands/edit/{id}', [BrandsController::class, 'edit']);
Route::put('dashboard/brands/update/{id}', [BrandsController::class, 'update']);
Route::delete('dashboard/brands/destroy/{destroy}', [BrandsController::class, 'destroy']);