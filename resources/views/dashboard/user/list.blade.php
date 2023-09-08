@extends('../layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">USER</h5>
			<br>
			<a href="{{url('/dashboard/user/create')}}" class="btn btn-dark">Tambah</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-curved text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="font-weight-normal">
							<th class="font-weight-normal">No</th>
							<th class="font-weight-normal">Nama</th>
							<th class="font-weight-normal">NIK</th>
							<th class="font-weight-normal">Cabang</th>
							<th class="font-weight-normal">Role</th>
							<th class="font-weight-normal">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $i => $row)
						<tr class="bayangan">
							<td>{{$i+1}}</td>
							<td>{{$row->name}}</td>
							<td>{{$row->username}}</td>
							<td>{{$row->branch}}</td>
							<td>{{strtoupper($row->role)}}</td>
							<td><a href="{{url('dashboard/user/edit/'.$row->id)}}" class="btn btn-dark"> Edit </a></td>
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