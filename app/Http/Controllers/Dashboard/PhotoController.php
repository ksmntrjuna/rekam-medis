<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Position;
use App\Models\Patient;
use App\Models\Treatment;
use App\Models\TreatmentPosition;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{
	public function list(Request $request)
	{
		$data = Photo::all();
		$get = (object)[
			'nobase' => $request->nobase,
		];
		$auth = Auth::user();
		$q = Photo::join('positions_treatments', 'photos.postreat_id', '=', 'positions_treatments.id')
			->join('positions', 'positions_treatments.position_id', '=', 'positions.id')
			->join('treatments', 'positions_treatments.treatment_id', '=', 'treatments.id')
			->select('photos.*', 'positions.name as posisi', 'treatments.name as treatment_name');

		if ($auth->role != 'dokter' && $auth->role != 'admin' && $auth->role != 'cabang') {
			$q->where('photos.user_id', $auth->id);
		}
		if ($auth->role == 'cabang') {
			$q->where('photos.branch', $auth->branch);
		}
		if ($request->nobase) {
			$q->where('photos.nobase', $request->nobase);
		}
		$mergedData = $q->orderBy('created_at', 'desc')
			->limit(50)
			->get();

		$datas = [
			'mergedData' => $mergedData,
			'data' => $data,
			'get' => $get,
			'auth' => $auth,

		];
		return view('dashboard.photo.list')->with($datas);
	}

	public function create()
	{
		// $position = Position::where('role_id', '3')->orderBy('name', 'asc')->get();
		$position = Position::all();
		$users = User::whereIn('role', ['fo', 'therapist'])->get();
		$treatment = Treatment::get(['id', 'name']);

		$datas = [
			'position' => $position,
			'users' => $users,
			'treatment' => $treatment,
		];
		return view('dashboard.photo.create')->with($datas);
	}

	public function upload(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'kode_member' => 'required',
			'nama' => 'required',
			'telp' => 'required|numeric',
			'position' => 'required',
			'photo' => 'image|required|mimes:jpeg,png,jpg,gif,svg,png',
		]);

		if ($validator->fails()) {
			return response()->json(['status' => 'error', 'message' => $validator->errors()->first()]);
		}


		$patient = Patient::where('nobase', strtoupper($request->kode_member))->first();
		if ($patient == null) {
			$patient = new Patient();
			$patient->id = Str::uuid();
			$patient->nobase = strtoupper($request->kode_member);
			$patient->name = strtoupper($request->nama);
			$patient->telp = $request->telp;
			$patient->save();
		}

		$date = $request->date . ' ' . $request->time;

		$photo = new Photo();
		$photo->id = Str::uuid();

		$photoPath = null;
		if ($request->hasFile('photo')) {
			$uploadedPhoto = $request->file('photo');
			$photoName = time() . '.' . $uploadedPhoto->getClientOriginalExtension();
			$uploadedPhoto->move(public_path('photo'), $photoName);
			$photoPath = 'photo/' . $photoName;
			$photo->photo = $photoPath;
		}

		$photo->nobase = $request->kode_member;
		$photo->patient_name = strtoupper($request->nama);
		$photo->postreat_id = $request->position;
		$photo->date = $date;
		$photo->user_id = null;
		$photo->branch = null;

		if (Auth::user()->role == 'admin') {
			$user_id = $request->user_id;
			$branch = User::find($user_id)->branch;
			$photo->user_id = $user_id;
			$photo->branch = $branch;
		} else {
			$photo->branch = Auth::user()->branch;
			$photo->user_id = Auth::user()->id;
		}

		$photo->note = $request->note;

		$photo->save();

		$patient = Patient::where('nobase', $request->kode_member)->orderBy('created_at', 'desc')->first();
		if ($patient->last < $date) {
			$patient->last = $date;
			$patient->save();
		}

		LogActivity::create('Upload Photo [dashboard] =>' . $photo, 'dashboard');

		return redirect('/dashboard/photo')->with('alert', 'Data Berhasil Diupdate');
	}

	public function edit($id)
	{
		$edit = Photo::find($id);

		if (!$edit) {
			return redirect('/dashboard/photo')->with('alert', 'Foto tidak ditemukan');
		}

		// Mengambil data treatment
		$treatment = Treatment::all(); // Pastikan Anda mengganti ini sesuai dengan model dan cara Anda mendapatkan data treatment.

		// Mengambil data users jika role adalah 'admin'
		if (Auth::user()->role == 'admin') {
			$users = User::all(); // Gantilah ini sesuai dengan model dan logika Anda untuk mengambil data users.
		} else {
			$users = []; // Anda bisa menginisialisasi dengan array kosong jika role bukan 'admin'.
		}

		$position = Position::all();

		return view('dashboard.photo.edit', compact('edit', 'treatment', 'users', 'position'));
	}

	public function update(Request $request)
	{
		// Validasi input
		$validator = Validator::make($request->all(), [
			'kode_member' => 'required',
			'nama' => 'required',
			'telp' => 'required|numeric',
			'position' => 'required',
			'photo' => 'image|mimes:jpeg,png,jpg,gif,svg,png',
			// Tambahkan aturan validasi untuk 'date' dan 'time' jika diperlukan
		]);

		// Cek apakah validasi gagal
		if ($validator->fails()) {
			return redirect()
				->back()
				->withErrors($validator)
				->withInput();
		}

		// Ambil data foto yang akan diperbarui
		$photo = Photo::find($request->id);

		// Cek apakah foto ditemukan
		if (!$photo) {
			return redirect('/dashboard/photo')->with('alert', 'Foto tidak ditemukan');
		}

		// Persiapkan data yang akan diupdate
		$data = [
			'nobase' => $request->kode_member,
			'postreat_id' => $request->position,
			'note' => $request->note,
			// Tambahkan field lain yang perlu diupdate sesuai kebutuhan
		];

		// Handle pembaruan foto jika ada
		if ($request->hasFile('photo')) {
			$uploadedPhoto = $request->file('photo');
			$photoName = time() . '.' . $uploadedPhoto->getClientOriginalExtension();

			// Simpan foto ke direktori yang sesuai
			$uploadedPhoto->move(public_path('photo'), $photoName);

			// Hapus foto lama jika ada
			if (File::exists(public_path($photo->photo))) {
				File::delete(public_path($photo->photo));
			}

			// Setel path foto baru
			$data['photo'] = 'photo/' . $photoName;
		}

		// Update data
		$photo->update($data);

		// Log aktivitas pembaruan foto
		LogActivity::create('Edit Photo (lama) =>' . $photo, 'dashboard');
		LogActivity::create('Edit Photo (baru) =>' . json_encode($data), 'dashboard');

		return redirect('/dashboard/photo')->with('alert', 'Data Berhasil Diupdate');
	}

	public function delete($id)
	{
		$p = Photo::where('id', $id)->first();
		// File::delete(base_path().'/public/uploads/photos/' . $p->photo);		// local delete
		Storage::delete(config('filesystems.disks.s3.folder') . '' . $p->photo);		// delete from S3

		$delete = Photo::where('id', $id)->delete();

		if ($delete) {
			LogActivity::create('Delete Photo =>' . $p, 'dashboard');
			return redirect('/dashboard/photo')->with('alert', 'Data Berhasil Dihapus');
		}
	}
}
