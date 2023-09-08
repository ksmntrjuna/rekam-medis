@extends('../layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">Treatment Position</h5>
		</div>
		<div class="card-body">
			<form method="post" action="{{url('/dashboard/treatment_position/store')}}" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="form-group col-md-6">
						<label>Name</label>
						<input type="text" class="form-control" placeholder="Name" name="name" required value="">
					</div>
					<div class="form-group col-md-6">
						<label>Status</label>
						<select class="form-control" name="status" required="">
							<option value="1">Aktif</option>
							<option value="0">Tidak Aktif</option>
						</select>
					</div>
					<div class="form-group col-md-12">
						<label>Posisi</label>
						<div class="row">
							@foreach($position as $p)
							<div class="col-md-4">
								<input class="checkbox" id="{{$p->id}}" type="checkbox" name="position_id[]" value="{{$p->id}}">
								<label for={{$p->id}}>
									{{$p->name}}
								</label>
							</div>
							@endforeach
						</div>
					</div>
					
				</div>
				<button type="submit" class="btn btn-dark"> Simpan </button>
			</form>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
@endsection