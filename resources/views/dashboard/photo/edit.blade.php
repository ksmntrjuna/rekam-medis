@extends('../layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="mb-4">
		<div class="card-header py-3">
			<h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">FOTO</h5>
		</div>
		<div class="card-body">
			<form method="post" action="{{url('/dashboard/photo/update')}}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="id" value="{{$data->id}}">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Kode Member</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Kode Member" aria-label="Kode Member" id="kode_member" name="kode_member" value="{{$data->nobase}}" required="" aria-describedby="basic-addon2">
							<div class="input-group-append" style="height: 38px;">
								<button class="btn btn-warning btn-sm" type="button" onclick="del()">X</button>
							</div>
						</div>
					</div>
					<div class="form-group col-md-6">
						<div class="row">
							<div class="col-md-6">
								<label>Tanggal Perawatan</label>
								<input type="text" class="form-control datepicker" data-date-format="yyyy-mm-dd" placeholder="Contoh {{date('Y-m-d')}}" id="date" name="date" required value="{{date('Y-m-d', strtotime($data->date))}}">
							</div>
							<div class="col-md-6">
								<label>Jam Perawatan</label>
								<select class="form-control" id="time" name="time" required>
									<option value="">Pilih Jam</option>
									@for($i=10; $i<=17;$i++)
									<option value="{{$i.':00:00'}}" @if($i==date('H', strtotime($data->date))) selected @endif>{{$i.':00'}}</option>
									@endfor
								</select>
							</div>
						</div>
					</div>
					@if(Auth::user()->role!='fo')
					<div class="form-group col-md-6">
						<label>Perawatan</label>
						<select class="form-control select2" style="width: 100%;" name="treatment" id="treatment">
							<option value="">Konsultasi</option>
							@foreach($treatment as $t)
							<option value="{{$t->code}}" @if($t->code==$data->treatment_code) selected @endif>{{$t->name}}</option>
							@endforeach
						</select>
					</div>
					@endif
					<div class="form-group col-md-3">
						<label>Posisi</label>
						<select class="form-control" name="position" id="position" required="">
						</select>
					</div>
					@if(Auth::user()->role=='admin')
					<div class="form-group col-md-3">
						<label>User</label>
						<select class="form-control select2" style="width: 100%;" name="user_id" id="user_id" required="">
							<option value="">User</option>
							@foreach($users as $usr)
							<option value="{{$usr->id}}" @if($usr->id==$data->user_id) selected @endif>{{$usr->username.' - '.$usr->name.' ('.$usr->branch.')'}}</option>
							@endforeach
						</select>
					</div>
					@endif
				</div>
				<div class="form-row">
					<div class="form-group col-12">
						<label>Catatan</label>
						<textarea class="form-control" name="note" rows="4">{{$data->note}}</textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Foto</label>
						<input type="file" class="form-control-file" name="photo" value="{{$data->photo}}">
						@if(file_exists(public_path('/uploads/photos/'.$data->photo)))
						<img src="{{asset('/uploads/photos/'.$data->photo)}}" width="150" style="border-radius: 5px;">
						@endif
					</div>
				</div>
				<button type="submit" class="btn btn-dark"> Simpan </button>
			</form>
		</div>
	</div>

</div>
@endsection
@section('script')
<script type="text/javascript">
	$('.datepicker').datepicker({});
	function fo(){
		@foreach($position as $pos)
		$('#position').append('<option value="{{$pos->id}}">{{$pos->name}}</option>');
		@endforeach
	}
	function del(){
		$('#kode_member').val('');
		// $('#treatment').html('');
		// $('#treatment').append('<option value="">Konsultasi</option>');
		// $('#position').html('');
		fo();
	}
	// function treatment(code){
	// 	$('#treatment').html('');
	// 	req++
	// 	$.ajax({
	// 		data: {
	// 			"_token": "{{ csrf_token() }}",
	// 			"kode_member": code,
	// 		},
	// 		url: "/lookup/member",
	// 		type: "get",
	// 		dataType: "json",
	// 		beforeSend: function() {
	// 			if (req > 1) req -= 1;
	// 		},
	// 		success:function(data) {
	// 			console.log(data);
	// 			if(req==1){
	// 				if(data.status=='success'){
	// 					var data = data.treatment;
	// 					$('#treatment').append('<option value="">Konsultasi</option>');
	// 					$.each(data, function(key, row){
	// 						$('#treatment').append('<option value="'+row.code+'">'+row.name+'</option>');
	// 					});
	// 				}else{
	// 					$('#treatment').append('<option value="">Konsultasi</option>');
	// 				}
	// 				req -= 1;
	// 			}else{
	// 				$('#treatment').append('<option value="">Konsultasi</option>');
	// 			}
	// 			$('#treatment').val('{{isset($data->treatment_code) ? $data->treatment_code : '' }}');
	// 			position(code, '{{isset($data->treatment_code) ? $data->treatment_code : '' }}');
	// 		}
	// 	});
	// }
	function position(nobase, treatment){
		$.ajax({
			data: {
				"_token": "{{ csrf_token() }}",
				"nobase": nobase,
				"treatment": treatment,
			},
			url: "/position/list",
			type: "get",
			dataType: "json",
			success: function(data){
				if(data.status=='success'){
					var data = data.data;
					$.each(data, function(key, row){
						$('#position').append('<option value="'+row.id+'">'+row.name+'</option>');
					});
				}else{
					fo();
				}
				$('#position').val('{{$data->position}}');
			}
		});
	}
	window.onload=function(){
		// treatment('{{$data->nobase}}');
		// position('{{$data->nobase}}', '');
		position('{{$data->nobase}}', '{{isset($data->treatment_code) ? $data->treatment_code : '' }}');
		// $('#treatment').val('{{$data->treatment_code}}');
		$('#position').val('{{$data->position}}');
		@if(date('H', strtotime($data->date) >= '17'))
		$('#time').val('17:00:00');
		@endif
	}
	var req="";
	$(document).ready(function(){
		@foreach($position as $pos)
		$('#position').append('<option value="{{$pos->id}}">{{$pos->name}}</option>');
		@endforeach
		$('#kode_member').on("keyup input", function(){
			var inputVal = $(this).val();
			treatment(inputVal);
		}); 

		$('#treatment').on("change", function(){
			var nobase = $('#kode_member').val();
			var treatment = $(this).val();
			$('#position').html('');
			if(treatment.length){
				position(nobase, treatment);
			}else{
				fo();
			}
		});
	});
</script>
@endsection