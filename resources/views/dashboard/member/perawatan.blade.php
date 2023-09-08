@extends('../layouts.app')
@section('style')
<link href="{{ asset('/css/lightbox.css') }}" rel="stylesheet">
@endsection
@section('content')
<style type="text/css">
	.crop {
        width: 180px;
        height: 150px;
        overflow: hidden;
    }
    .crop img {
        width: 150px;
        height: 180px;
        margin: -20px 0 0 -50px;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">{{$patient->name}}</h5>
			<h6>{{$patient->nobase}} | {{$patient->telp}}</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-curved text-center table-border" id="dataTable" cellspacing="0">
					<thead>
						<tr class="font-weight-normal">
							<th class="font-weight-normal" width="5%">No</th>
							<th class="font-weight-normal" width="15%">Tanggal</th>
							@if(Auth::user()->role!='therapist')
							<th class="font-weight-normal" width="40%">Konsultasi</th>
							@endif
							@if(Auth::user()->role!='fo')
							<th class="font-weight-normal" width="40%">Perawatan</th>
							@endif
						</tr>
					</thead>
					<tbody>
						@foreach($data as $i => $d)
						<tr class="bayangan">
							<td>{{$i+1}}</td>
							<td>
								{{date('d-m-Y', strtotime($d->dates))}}<br>
								{{$d->branch}}
							</td>
							@if(Auth::user()->role!='therapist')
							<td>
								<div class="border p-2">
									<div class="row">
										@foreach(Photo::getByDate(date('Y-m-d', strtotime($d->dates)), $d->nobase) as $p)
										<div class="col-md-6" style="padding-bottom: 6px;">
											
											<!-- <img src="{{config('thirdparty.s3.url')}}{{config('filesystems.disks.s3.folder').''.$p->photo}}" width="150" style="border-radius: 5px;"> -->
											{{-- @if(file_exists(public_path('/uploads/photos/'.$p->photo))) --}}
											<div class="col-md-6" style="padding-bottom: 30px; padding-top: 20px;">
											<div class="crop">
											<a class="example-image-link-{{$i}}" href="{{config('thirdparty.s3.url')}}{{config('filesystems.disks.s3.folder').''.$p->photo}}" data-lightbox="example-set-{{$i}}" data-title="{{$p->position}} {{date('d-m-Y', strtotime($d->dates))}}"><img class="example-image-{{$i}}" src="{{config('thirdparty.s3.url')}}{{config('filesystems.disks.s3.folder').''.$p->photo}}" alt=""  width="150" style="border-radius: 5px;"/></a>
										</div>
										</div>
											{{-- @endif --}}
											<h6><b>{{$p->position}}</b></h6>
											<h6><i>by: {{$p->name.' ('.strtoupper($p->role).')'}}</i></h6>
										</div>
										@endforeach
									</div>
									@if(Photo::getByDate(date('Y-m-d', strtotime($d->dates)), $d->nobase)->count()>0)
									<a class="btn btn-dark btn-sm mt-1" href="{{url('/dashboard/compare/'.$d->nobase.'/'.date('Y-m-d', strtotime($d->dates)).'/trm#'.str_replace(' ', '_', $p->position))}}">Compare</a>
									@endif
								</div>
							</td>
							@endif
							@if(Auth::user()->role!='fo')
							<td>
								@foreach(Photo::getByTreatment(date('Y-m-d', strtotime($d->dates)), $d->nobase) as $t)
								<div class="border p-2">
									<p><b>{{$t->treatment_code}}</b></p>
									<hr>
									<div class="row">
										@foreach(Photo::getByDateT(date('Y-m-d', strtotime($d->dates)), $d->nobase, $t->treatment_code) as $p)
										<div class="col-md-6" style="padding-bottom: 6px;">
											
											<!-- <img src="{{config('thirdparty.s3.url')}}{{config('filesystems.disks.s3.folder').''.$p->photo}}" width="150" style="border-radius: 5px;"> -->
											{{-- @if(file_exists(public_path('/uploads/photos/'.$p->photo))) --}}
											<div class="crop">
											<a class="example-image-link-{{$i}}" href="{{config('thirdparty.s3.url')}}{{config('filesystems.disks.s3.folder').''.$p->photo}}" data-lightbox="example-set-{{$i}}" data-title="{{$p->position}} {{date('d-m-Y', strtotime($d->dates))}}"><img class="example-image-{{$i}}" src="{{config('thirdparty.s3.url')}}{{config('filesystems.disks.s3.folder').''.$p->photo}}" alt=""  width="150" style="border-radius: 5px;"/></a>
										</div>
											{{-- @endif --}}
											<h6><b>{{$p->position}}</b></h6>
											<h6><i>by: {{$p->name.' ('.strtoupper($p->role).')'}}</i></h6>
											<br>
										</div>
										@endforeach
									</div>
									@if(Photo::getByDateT(date('Y-m-d', strtotime($d->dates)), $d->nobase, $t->treatment_code)->count()>0)
									<a class="btn btn-dark btn-sm mt-1" href="{{url('/dashboard/compare/'.$d->nobase.'/'.date('Y-m-d', strtotime($d->dates)).'/'.$p->treatment_code.'#'.str_replace(' ', '_', $p->position))}}">Compare</a>
									@endif
								</div>
								@endforeach
							</td>
							@endif
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
<script src="{{ asset('js/lightbox.js') }}"></script>
@endsection