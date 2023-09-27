@extends('../layouts.app')
@section('style')
<link href="{{ asset('/css/lightbox.css') }}" rel="stylesheet">
<style type="text/css">
	.nav-tabs {
		background-color: #ffffff;
		border-bottom: 2px solid #ebebeb;
	}
	.nav-tabs > li {
		padding: 10px;
	}
	a:link    { color: #FFD571; text-decoration: none; }
	a:visited { color: #FFD571; text-decoration: none; }
	a:hover   { color: #FFD571; text-decoration: none; }
	a:active  { color: #FFD571; text-decoration: none; }
</style>
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<a class="btn btn-dark" href="{{url('/dashboard/perawatan/'.$patient->nobase)}}"><span class="fa fa-arrow-left"></span></a><h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">{{$patient->name}}</h5>
			<h6>{{$patient->nobase}} | {{$patient->telp}}</h6>
			@if($treatment!='trm')
			<h6>{{$treatment}}</h6>
			@endif
		</div>
		<div class="card-body">
			<div class="tab-container">
				<ul class="nav nav-tabs" id="tab">
					@foreach($position as $i => $s)
					<li class="t t-{{str_replace(' ', '_', $s->name)}}"><a id="t-{{str_replace(' ', '_', $s->name)}}" href="#{{str_replace(' ', '_', $s->name)}}" data-toggle="tab">{{$s->name}}</a></li>
					@endforeach
				</ul>
				<div class="tab-content">
					@foreach($position as $i => $s)
					<div id="{{str_replace(' ', '_', $s->name)}}" class="tab-pane @if($i==0) active @endif cont">
						<div class="row mt-2">
							@foreach(Photo::compare($patient->nobase, \Request::segment(4), $s->id) as $p)
							<div class="col-sm-6 text-center mb-5">
								<p>{{date('d-m-Y', strtotime($p->date))}}</p>
								{{-- @if(file_exists(public_path('/uploads/photos/'.$p->photo))) --}}
								<a class="example-image-link-{{$i}}" href="{{config('thirdparty.s3.url')}}{{config('filesystems.disks.s3.folder').''.$p->photo}}" data-lightbox="example-set-{{$i}}" data-title="{{$s->name}} {{date('d-m-Y', strtotime($p->date))}}">
									<img class="example-image-{{$i}}" src="{{config('thirdparty.s3.url')}}{{config('filesystems.disks.s3.folder').''.$p->photo}}" alt="{{$s->name}}"  width="100%"/>
								</a>
								{{-- @endif --}}
 							</div>
							@endforeach
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
@endsection
@section('script')
<script src="{{ asset('js/lightbox.js') }}"></script>
<script type="text/javascript">
	var tp = window.location.hash.substr(1);
	$('.t-'+tp).attr('style', 'background: #000; color: #fff;');
	$('#tab a').click(function(e) {
		$('.t').attr('style', 'background: #fff');
		e.preventDefault();
		$(this).tab('show');
		var t = $(this).attr('id');
		$('.'+t).attr('style', 'background: #000; color: #fff;');
	});
	$("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
		var id = $(e.target).attr("href").substr(1);
		window.location.hash = id;
	});
	var hash = window.location.hash;
	$('#tab a[href="' + hash + '"]').tab('show');
</script>
@endsection
