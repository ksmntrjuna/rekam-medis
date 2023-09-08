@extends('../layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">USER</h5>
			@if ($errors->any())
			<br>
			<div role="alert" class="alert alert-warning alert-dismissible">
				<button type="button" data-dismiss="alert" aria-label="Close" class="close">x</button><span class="icon mdi mdi-alert-triangle"></span><strong>Perhatian!</strong><br>
				@foreach ($errors->all() as $error)
				{{ $error }}<br>
				@endforeach
			</div>
			@endif
		</div>
		<div class="card-body">
			<form action="{{url('/dashboard/user/store')}}" method="post">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Nama</label>
						<input type="text" class="form-control" placeholder="Nama" name="name" value="{{old('name')}}" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>NIK</label>
						<input type="text" class="form-control" placeholder="NIK" name="username" value="{{old('username')}}" required>
					</div>
					<div class="form-group col-md-6">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Role</label>
						<select class="form-control" name="role" required="">
							@foreach($role as $r)
							<option value="{{$r->name}}">{{strtoupper($r->name)}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-md-6">
						<label>Cabang</label>
						<select class="form-control select2" name="branch" style="width: 100%;" required="">
							@foreach($outlet as $o)
							<option value="{{$o->code}}">{{$o->outlet_name}}</option>
							@endforeach
						</select>
					</div>
				</div>
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
		<form action="{{url('/dashboard/user/store')}}" method="post">
			@csrf
			nama: <input type="text" name="name" required><br>
			email: <input type="email" name="email" required=""><br>
			password: <input type="password" name="password" required=""><br>
			role: <select name="role" required="">
				@foreach($role as $r)
				<option value="{{$r->name}}">{{$r->name}}</option>
				@endforeach
			</select><br>
			cabang: <select name="branch" required="">
				@foreach($outlet as $o)
				<option value="{{$o->code}}">{{$o->outlet_name}}</option>
				@endforeach
			</select><br>
			<button type="submit">simpan</button>
		</form>
	</body>
	</html> --}}