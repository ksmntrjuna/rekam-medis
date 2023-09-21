@extends('../layouts.app')
@section('style')
<link href="{{ asset('/css/lightbox.css') }}" rel="stylesheet">
<style type="text/css">
	.nav-tabs {
		background-color: #ffffff;
		border-bottom: 2px solid #ebebeb;
	}

	.nav-tabs>li {
		padding: 10px;
	}

	a:link {
		color: #FFD571;
		text-decoration: none;
	}

	a:visited {
		color: #FFD571;
		text-decoration: none;
	}

	a:hover {
		color: #FFD571;
		text-decoration: none;
	}

	a:active {
		color: #FFD571;
		text-decoration: none;
	}
</style>
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<a class="btn btn-dark" href="{{url('/dashboard/perawatan/'.$patient->nobase)}}"><span class="fa fa-arrow-left"></span></a>
			<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">{{$patient->name}}</h5>
			<h6>{{$patient->nobase}} | {{$patient->telp}}</h6>
			@if($treatment!='trm')
			<h6>{{$treatment}}</h6>
			@endif
		</div>
		<div class="card-body">
			<div class="tab-container">
				<ul class="nav nav-tabs" id="tab">
					@php
					$uniquePositions = collect($positions)->unique();
					@endphp
					@foreach($uniquePositions as $positionName)
					<li class="t t-{{str_replace(' ', '_', $positionName)}}">
						<a id="t-{{str_replace(' ', '_', $positionName)}}" href="#{{str_replace(' ', '_', $positionName)}}" data-toggle="tab">{{$positionName}}</a>
					</li>
					@endforeach
				</ul>
				<div class="tab-content">
					@foreach($positions as $positionId => $positionName)
					<div id="{{str_replace(' ', '_', $positionName)}}" class="tab-pane @if($loop->first) active @endif cont">
						<div class="row mt-2">
							@foreach($photos as $photo)
							@if($positions[$photo->id] === $positionName)
							<div class="col-sm-6 text-center mb-5">
								<p>{{ date('d-m-Y', strtotime($photo->created_at)) }}</p>
								<img src="{{ asset($photo->photo) }}" width="500" height="400" style="border-radius: 5px;">
							</div>
							@endif
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
	$('.t-' + tp).attr('style', 'background: #000; color: #fff;');
	$('#tab a').click(function(e) {
		$('.t').attr('style', 'background: #fff');
		e.preventDefault();
		$(this).tab('show');
		var t = $(this).attr('id');
		$('.' + t).attr('style', 'background: #000; color: #fff;');
	});
	$("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
		var id = $(e.target).attr("href").substr(1);
		window.location.hash = id;
	});
	var hash = window.location.hash;
	$('#tab a[href="' + hash + '"]').tab('show');
</script>
@endsection