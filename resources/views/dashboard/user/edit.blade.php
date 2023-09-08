@extends('../layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">USER</h5>
		</div>
		<div class="card-body">
			@if(Auth::user()->role=='admin')
			<form action="{{url('/dashboard/user/update')}}" method="post">
				@csrf
				<input type="hidden" name="id" value="{{$data->id}}">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nama</label>
						<input type="text" class="form-control" placeholder="Nama" name="name" required value="{{$data->name}}">
					</div>
					<div class="form-group col-md-6">
						<label>NIK</label>
						<input type="text" class="form-control" placeholder="NIK" name="username" required value="{{$data->username}}">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Role</label>
						<select class="form-control" name="role" @if(Auth::user()->role!='admin') disabled @endif required="">
							@foreach($role as $r)
							<option value="{{$r->name}}" @if($data->role==$r->name) selected @endif>{{strtoupper($r->name)}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-md-6">
						<label>Cabang</label>
						<select class="form-control select2" style="width: 100%;" name="branch" @if(Auth::user()->role!='admin') disabled @endif required="">
							@foreach($outlet as $o)
							<option value="{{$o->code}}" @if($data->branch==$o->code) selected @endif>{{$o->outlet_name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<button type="submit" class="btn btn-dark"> Simpan </button>
			</form>
			<hr>
			@endif
			<div class=" py-3">
				<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">UBAH PASSWORD</h5>
			</div>
			<form action="{{url('/dashboard/user/password')}}" method="post">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Password</label>
						<input type="hidden" name="id" value="{{$data->id}}">
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>
					<div class="form-group col-md-6">
						<label>Ulangi</label>
						<input type="password" class="form-control" placeholder="Ulangi Password" name="confirmation" required>
					</div>
				</div>
				<button type="submit" class="btn btn-dark"> Simpan </button>
			</form>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
@endsection