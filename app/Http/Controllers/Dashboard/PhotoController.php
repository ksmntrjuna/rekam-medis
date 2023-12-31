<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Role;
use App\Models\User;
use App\Models\Brand;
use App\Models\Photo;
use App\Models\Patient;
use App\Models\Position;
use App\Models\Treatment;
use App\Models\LogActivity;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Psy\Command\WhereamiCommand;
use App\Models\TreatmentPosition;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
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
	
	public function list(Request $request)
	{
		// dd($auth);
		$auth = Auth::user();
		$data = Photo::all();
		$get = (object)[
			'nobase' => $request->nobase,
		];

		$q = Photo::join('positions_treatments', 'photos.postreat_id', '=', 'positions_treatments.id')
		->join('positions', 'positions_treatments.position_id', '=', 'positions.id')
		->join('treatments', 'positions_treatments.treatment_id', '=', 'treatments.id')
		->select('photos.*', 'positions.name as posisi', 'treatments.name as treatment_name')
		->when($auth->role != 'super admin', function ($query) use ($auth) {
			// If the user is not super admin, restrict by brand_id
			return $query->where('photos.brand_id', $auth->brand_id);
		});
		
		if ($auth->role != 'super admin' && $auth->role != 'dokter' && $auth->role != 'admin' && $auth->role != 'cabang') {
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
		$position = Position::where('brand_id', Auth::user()->brand_id)->get();
		$users = User::whereIn('role', ['fo', 'therapist'])->where('brand_id', Auth::user()->brand_id)->get();
		$treatment = Treatment::where('brand_id', Auth::user()->brand_id)->get(['id', 'name']);
		$brands = Brand::all(); // Assuming Brand is the model for your brand data


		if (Auth::user()->role == 'super admin') {
			$brands = Brand::all(['id', 'name']);
			$position = Position::all();
			$users = User::whereIn('role', ['fo', 'therapist'])->get();
			$treatment = Treatment::all(['id', 'name', 'brand_id']);
		} else {
			$brands = null; 
		}

		$datas = [
			'position' => $position,
			'users' => $users,
			'treatment' => $treatment,
			'brands' => $brands, 
		];
		return view('dashboard.photo.create')->with($datas);
	}

	public function upload(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'kode_member' => 'required',
			'nama' => 'required',
			'telp' => 'required|numeric',
			'position.*' => 'required',
			'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
			'treatment' => 'required',
			'date' => 'required|date_format:d-m-Y'
		]);

		if ($validator->fails()) {
			return response()->json(['status' => 'error', 'message' => $validator->errors()->first()]);
		}

		// Cek apakah patient sudah ada berdasarkan 'nobase'
		$patient = Patient::where('nobase', strtoupper($request->kode_member))->first();

		// Jika belum ada, buat patient baru
		if ($patient == null) {
			$patient = new Patient();
			$patient->id = Str::uuid();
			$patient->nobase = strtoupper($request->kode_member);
			$patient->name = strtoupper($request->nama);
			$patient->telp = $request->telp;

			// Save branch information based on the user's role
			if (Auth::user()->role == 'super admin' || Auth::user()->role == 'admin'
			) {
				$user_id = $request->user_id;
				$user = User::find($user_id);

				// Check if the user and user's branch exist
				if ($user && $user->branch) {
					$patient->branch = $user->branch;
					$patient->brand_id = $user->brand_id;
				} else {
					// Handle the case where user or user's branch is not found
					return response()->json(['status' => 'error', 'message' => 'User or User\'s branch not found']);
				}
			} else {
				$patient->branch = Auth::user()->branch;
				$patient->brand_id = Auth::user()->brand_id;
			}

			$patient->save();
		}

		
		// dd($request->position[0]);
		foreach ($request->file('photo') as $key => $imagefile) {
			// Buat objek Photo
			$photo = new Photo();
			$photo->id = Str::uuid();

			// Handle file photo
			$photoPath = null;
			$uploadedPhoto = $imagefile;
			$position = $request->position[$key];
			// $photoName = time() . '.' . $uploadedPhoto->getClientOriginalExtension();
			$photoName = time() . '_posisi_' . $position . '.' . $uploadedPhoto->getClientOriginalExtension();
			$uploadedPhoto->move(public_path('photo'), $photoName);
			$photoPath = 'photo/' . $photoName;
			$photo->photo = $photoPath;

			// Simpan Photo ke database
			$photo->nobase = $request->kode_member;
			$photo->patient_name = strtoupper($request->nama);
			$postreat = TreatmentPosition::where('position_id', $request->position[$key])
				->where('treatment_id', $request->treatment)
				->first();

			// Pastikan $postreat tidak null sebelum mencoba mengakses id
			if ($postreat) {
				$photo->postreat_id = $postreat->id;

				// Dapatkan treatment_id dari model Treatment
				$treatmentId = $postreat->treatment_id;

				// Simpan treatment_id ke dalam foto
				$photo->treatment_id = $treatmentId;
			} else {
				// Handle jika TreatmentPosition tidak ditemukan
				return response()->json(['status' => 'error', 'message' => 'Treatment Position not found']);
			}

			// Dapatkan treatment code dari tabel treatments
			$treatmentId = $request->treatment;
			$treatmentCode = Treatment::find($treatmentId)->code;
			$photo->treatment_code = $treatmentCode;

			// Format tanggal dan waktu
			$date = $request->date . ' ' . $request->time;
			$date = \Carbon\Carbon::createFromFormat('d-m-Y H:i:s', $request->date . ' ' . $request->time)->format('Y-m-d H:i:s');
			$photo->date = $date;

			// Isi user_id dan branch
			if (Auth::user()->role == 'super admin'
			) {
				$user_id = $request->user_id;
				$branch = User::find($user_id)->branch;
				$photo->user_id = $user_id;
				$photo->branch = $branch;
			} elseif (Auth::user()->role == 'admin'
			) {
				$user_id = $request->user_id;
				$branch = User::find($user_id)->branch;
				$photo->user_id = $user_id;
				$photo->branch = $branch;
			} else {
				$photo->branch = Auth::user()->branch;
				$photo->user_id = Auth::user()->id;
			}
			$photo->note = $request->note;
			// $photo->date = $request->date;
			$brandId = Treatment::find($treatmentId)->brand_id;
			$photo->brand_id = $brandId;

			// Simpan Photo ke database
			$photo->save();
		}
		// Update last pada Patient jika perlu
		$patient = Patient::where('nobase', $request->kode_member)->orderBy('created_at', 'desc')->first();
		if ($patient->last < $date) {
			$patient->last = $date;
			$patient->save();
		}
		// dd($date);
		// Log aktivitas
		LogActivity::create('Upload Photo [dashboard] =>' . $photo, 'dashboard');

		// Redirect ke halaman yang sesuai
		return redirect('/dashboard/photo')->with('alert', 'Data Berhasil Diupdate');
	}

	public function edit($nobase, $treatment_id)
	{
		$patients = Patient::where('nobase', $nobase)->first();

		$edit = Photo::leftJoin('treatments', 'treatments.code', '=', 'photos.treatment_code')
		->select('photos.*', 'treatments.id as treatment_id')
		->where('photos.nobase', $nobase)
			->where('photos.treatment_id', $treatment_id)
			->first();

		if (!$edit) {
			return redirect('/dashboard/photo')->with('alert', 'Foto tidak ditemukan');
		}

		$photos = Photo::leftJoin('treatments', 'treatments.code', '=', 'photos.treatment_code')
		->leftJoin('positions_treatments', 'photos.postreat_id', '=', 'positions_treatments.id')
		->leftJoin('positions', 'positions_treatments.position_id', '=', 'positions.id')
		->select('photos.*', 'treatments.id as treatment_id', 'positions.name as position_name')
		->where('photos.nobase', $nobase)
			->where('photos.treatment_id', $treatment_id);

		if (Auth::user()->role == 'super admin') {

			$photos = $photos->get();
			if (Auth::user()->role == 'super admin') {
				$photos = $photos->unique('id');
			} else {
				$photos = $photos->where('treatments.brand_id', Auth::user()->brand_id)->get();
			}

		} else {
			$photos = $photos->where('treatments.brand_id', Auth::user()->brand_id)->get();
		}

		$treatment = Treatment::all();
		$position = Position::all();

		if (Auth::user()->role == 'admin' || Auth::user()->role == 'super admin') {
			$users = User::all();
		} else {
			$users = [];
		}

		$data = [
			'edit' => $edit,
			'treatment' => $treatment,
			'users' => $users,
			'position' => $position,
			'photos' => $photos,
			'patients' => $patients,
			
		];
		return view('dashboard.photo.edit', compact('edit', 'treatment', 'users', 'position', 'photos', 'patients'));
	}

	public function update(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'kode_member' => 'required',
			'nama' => 'required',
			'telp' => 'required|numeric',
			// 'position.*' => 'required_without:photo.*',
			'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
			'treatment' => $request->has('treatment') ? 'required' : '',
			'date' => 'required|date_format:d-m-Y',
		]);

		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}

		$auth = Auth::user();
		$photos = Photo::where('nobase', $request->kode_member);

		if ($auth->role == 'super admin') {
			$photos = $photos->where('brand_id', $request->brand_id)->get();
		} elseif ($auth->role == 'admin') {
			$photos = $photos->where('brand_id', $auth->brand_id)->get();
		} else {
			return redirect('/dashboard/photo')->with('alert', 'Unauthorized access');
		}

		if ($photos->isEmpty()) {
			return redirect('/dashboard/photo')->with('alert', 'Foto tidak ditemukan');
		}
		
		// Loop through each photo and update data
		foreach ($photos as $key => $photo) {
			$data = [
				'nobase' => $request->kode_member,
				// 'postreat_id' => $request->position[$key],
				'note' => $request->note,
				'date' => \Carbon\Carbon::createFromFormat('d-m-Y H:i:s', $request->date . ' ' . $request->time)->format('Y-m-d H:i:s'),
			];
			
			// Handle pembaruan foto jika ada
			if ($request->hasFile('photo') && isset($request->file('photo')[$key])) {
				// Get the uploaded photo
				$uploadedPhoto = $request->file('photo')[$key];
				
				// Generate a unique name for each photo
				$photoName = time() . '_' . $key . '.' . $uploadedPhoto->getClientOriginalExtension();
				
				// Move the photo to the desired directory
				$uploadedPhoto->move(public_path('photo'), $photoName);

				// Setel path foto baru
				$data['photo'] = 'photo/' . $photoName;

				// Remove the old photo file
				if (File::exists(public_path($photo->photo))) {
					File::delete(public_path($photo->photo));
				}
			}

			// Update data for each photo
			$photo->update($data);

			// Log aktivitas pembaruan foto
			LogActivity::create('Edit Photo (lama) =>' . $photo, 'dashboard');
			LogActivity::create('Edit Photo (baru) =>' . json_encode($data), 'dashboard');
		}

		return redirect('/dashboard/photo')->with('alert', 'Data Berhasil Diupdate');
	}

	public function delete($nobase, $treatment_id)
	{
		$photos = Photo::where('nobase', $nobase)->where('treatment_id', $treatment_id)->get();

		if ($photos->isEmpty()) {
			return redirect('/dashboard/photo')->with('error', 'Photos not found');
		}

		foreach ($photos as $photo) {
			// Delete the photo from the storage (S3 in this case)
			Storage::delete(config('filesystems.disks.s3.folder') . $photo->photo);

			// Delete the record from the database
			$photo->delete();
		}

		LogActivity::create('Delete Photos => Nobase: ' . $nobase . ', Treatment ID: ' . $treatment_id, 'dashboard');

		return redirect('/dashboard/photo')->with('alert', 'Data Berhasil Dihapus');
	}

	public function fetchData(Request $request)
	{
		$brandId = $request->input('brand_id');

		// Add any necessary validation or error handling

		// Fetch treatment data based on brand
		$treatments = Treatment::where('brand_id', $brandId)->get(['id', 'name']);

		// Fetch user data based on brand
		$users = User::where('brand_id', $brandId)->whereIn('role', ['fo', 'therapist'])->get(['id', 'username', 'name', 'branch']);

		return response()->json(['status' => 'success', 'treatments' => $treatments, 'users' => $users]);
	}

}
