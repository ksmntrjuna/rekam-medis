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
			<form method="post" action="{{url('/dashboard/treatment_position/update')}}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="id" value="{{$data->id}}">
				<div class="row">
					<div class="form-group col-md-6">
						<label>Name</label>
						<input type="text" class="form-control" placeholder="Name" name="name" required value="{{$data->name}}">
					</div>
					<div class="form-group col-md-6">
						<label>Status</label>
						<select class="form-control" name="status" required="">
							<option value="1" @if ($data->status == 1) selected @endif>Aktif</option>
							<option value="0" @if ($data->status == 0) selected @endif>Tidak Aktif</option>
						</select>
					</div>
					<div class="form-group col-md-12">
						<label>Posisi</label>
						<div class="row">
							@foreach($position as $p)
							<div class="col-md-4">
								<input class="checkbox" id="{{$p->id}}" type="checkbox" name="position_id[]" {{ explode(",", $data->position_id)[array_search($p->id, explode(",", $data->position_id))]==$p->id ? 'checked' : '' }} value="{{$p->id}}">
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