@extends('../layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">Master Perawatan</h5><br>
			<a href="{{url('/dashboard/treatment_position/create')}}" class="btn btn-dark">Tambah</a>
		</div>
		@if ($message = Session::get('alert'))
		<div class="main-content container-fluid">
			<div class="row">
				<div class="col-md-9">
				</div>
				<div class="col-md-3">
					<div role="alert" class="alert alert-primary alert-dismissible notif">
						<button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><span style="font-size: 13px;">{{ $message }}</span>
					</div>
				</div>
			</div>
		</div>
		@endif
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-curved text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="font-weight-normal">
							<th class="font-weight-normal">No</th>
							<th class="font-weight-normal">Nama</th>
							<th class="font-weight-normal">Posisi</th>
							<th class="font-weight-normal">Aksi</th>
						</tr>
					</thead>
					<tbody>

						@foreach($data as $i => $d)
						<tr class="bayangan">
							<td>{{$i+1}}</td>
							<td>{{$d->name}}</td>
							<td>
								@foreach(Position::getByTreatment($d->id) as $p)
								{{$p->name}}<br>
								@endforeach
							</td>
							<td>
								<a href="{{url('dashboard/treatment_position/edit/'.$d->id)}}" class="btn btn-dark"> Edit </a>&nbsp;
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
@endsection