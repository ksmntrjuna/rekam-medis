@extends('../layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">POSISI</h5>
		</div>
		<div class="card-body">
			<form method="post" action="{{url('/dashboard/position/update')}}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="id" value="{{$data->id}}">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Name</label>
						<input type="text" class="form-control" placeholder="Name" name="name" required value="{{$data->name}}">
					</div>
					<div class="form-group col-md-6">
						<label>Role</label>
						<select class="form-control" name="role_id" required="">
							<option value="">Pilih Role</option>
							@foreach($role as $row)
							<option value="{{$row->id}}" @if ($data->role_id == $row->id) selected @endif>{{strtoupper($row->name)}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-md-6">
						<label>Brand</label>
						<select class="form-control" name="brand_id" required="">
							@foreach($brands as $p)
							<option value="{{ $p->id }}">{{ $p->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-md-6">
						<label>Status</label>
						<select class="form-control" name="status" required="">
							<option value="1" @if ($data->status == 1) selected @endif>Aktif</option>
							<option value="0" @if ($data->status == 0) selected @endif>Tidak Aktif</option>
						</select>
					</div>
				</div>
				<!-- <div class="form-row">
					<div class="form-group col-md-6">
						<label>Foto</label>
						<input type="file" class="form-control-file" name="image" value="{{$data->image}}">
						@if(file_exists(public_path('/uploads/photos/'.$data->image)))
						<img src="{{asset('/uploads/photos/'.$data->image)}}" width="150" style="border-radius: 5px;">
						@endif
					</div>
				</div> -->
				<button type="submit" class="btn btn-dark"> Simpan </button>
			</form>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
@endsection

{{-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="{{url('/dashboard/photo/upload')}}" enctype="multipart/form-data">
@csrf
Kode: <input type="text" name="kode_member">
Posisi: <input type="text" name="position">
photo: <input type="file" name="photo">
<button type="submit">simpan</button>
</form>
</body>

</html> --}}