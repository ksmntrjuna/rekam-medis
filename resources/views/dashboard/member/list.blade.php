@extends('../layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">PERAWATAN</h5>
			<div class="row">
				<div class="col-sm-8"></div>
				<div class="col-sm-4">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" style="background: transparent; color: #000; border: 0;">Search : </span>
							</div>
							<input style="border: 1px solid grey;" type="text" class="form-control" id="nobase" name="nobase" value="{{$get->nobase}}" placeholder="Masukkan Kode Member" aria-label="Masukkan Kode Member" title="Masukkan Kode Member" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" style="background:#fff; color: grey; border: 0; border-top: 1px solid grey; border-bottom: 1px solid grey;" type="button" onclick="clean()">X</button>
								<button class="btn btn-dark" type="submit"><i class="fas fa-fw fa-search text-kuning"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-curved text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="font-weight-normal">
							<th class="font-weight-normal">No</th>
							<th class="font-weight-normal">Kode Member</th>
							<th class="font-weight-normal">Nama</th>
							<th class="font-weight-normal">Cabang</th>
							<th class="font-weight-normal">Perawatan Terakhir</th>
							<th class="font-weight-normal">Jam</th>
						</tr>
					</thead>
					<tbody>

						@foreach($data as $i => $d)
						<tr class="bayangan">
							<td>{{$i+1}}</td>
							<td><a href="{{url('/dashboard/perawatan/'.$d->kode_member)}}" class="btn btn-dark">{{$d->kode_member}}</a></td>
							<td>{{$d->nama}}</td>
							<td>{{$d->branch}}</td>
							<td>{{date('d-m-Y', strtotime($d->last))}}</td>
							<td>{{date('H:i', strtotime($d->last))}}</td>
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
@section('script')
<script type="text/javascript">
	$('.table').dataTable( {
		"searching": false
	} );
	function clean(){
		$('#nobase').val('');
		window.location.href='?nobase=';
	}
</script>
@endsection