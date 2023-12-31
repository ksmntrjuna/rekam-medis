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
            <form method="post" action="{{ url('/dashboard/photo/update')}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <input type="hidden" name="brand_id" value="{{ $edit->brand_id }}">
                <div class="form-row">
                    <div class="form-group col-md-3 input-group">
                        <label>Kode Member</label>
                        <div class="input-group">
                            <input type="hidden" id="member" name="member">
                            <input type="text" class="form-control" placeholder="Kode Member" aria-label="Kode Member" id="kode_member" name="kode_member" required="" value="{{ $edit->nobase }}" aria-describedby=" basic-addon2" readonly>
                            <div class="input-group-append" style="height: 38px;">
                                <button class="btn btn-warning btn-sm" type="button" onclick="search()"><i class="fas fa-fw fa-search text-kuning"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Nama Member</label>
                        <div class="">
                            <input type="text" class="form-control" placeholder="Nama Member" aria-label="Kode Member" id="nama" name="nama" required="" value="{{ $edit->patient_name }}" readonly>
                        </div>
                    </div>
                    <div class=" form-group col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nomor Telepon</label>
                                <input type="telp" class="form-control" id="telp" name="telp" placeholder="Nomor Telepon" required value="{{ $patients->telp }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label>Tanggal Perawatan</label>
                                <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="Contoh {{date('d-m-Y')}}" id="date" name="date" required value="{{ date('d-m-Y', strtotime($edit->date)) }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Jam Perawatan</label>
                        <select class="form-control" name="time" required>
                            <option value="">Pilih Jam</option>
                            @for ($i = 10; $i <= 17; $i++) <option value="{{ $i . ':00:00' }}" {{ old('time', date('H:i:s', strtotime($edit->date)) == $i . ':00:00' ? 'selected' : '') }}>{{ $i . ':00' }}</option>
                                @endfor
                        </select>
                    </div>
                    @if(Auth::user()->role!='fo')
                    <div class="form-group col-md-5">
                        <label>Perawatan</label>
                        <select class="form-control select2" style="width: 100%;" name="treatment" id="treatment" disabled>

                            @foreach($treatment as $t)
                            <option value="{{ $t->id }}" {{ old('treatment', $edit->treatment_code) == $t->code ?'selected' : '' }}>
                                {{ $t->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="form-group col-md-8">
                        <label>Posisi</label>
                        <div id="position-list-container"></div>
                    </div>
                    @if (Auth::user()->role == 'super admin' || Auth::user()->role == 'admin')
                    <div class="form-group col-md-3">
                        <label>User</label>
                        <select class="form-control select2" style="width: 100%;" name="user_id" id="user_id" required="" disabled>
                            @foreach($users as $usr)
                            <option value="{{ $usr->id }}" {{ old('user_id', $edit->user_id) == $usr->id ? 'selected' : '' }}>{{ $usr->username.' - '.$usr->name.' ('.$usr->branch.')' }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label>Catatan</label>
                        <textarea class="form-control" name="note" rows="4">{{ $edit->note }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark"> Simpan </button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    window.onload = function() {
        $('.datepicker').datepicker({
            endDate: new Date() // Set the end date to the current date
        });

        function del() {
            $('#kode_member').val('');
            $('#treatment').html('');
            $('#treatment').append('<option value="">Konsultasi</option>');
            $('#position').html('');
            fo();
        }

        function search() {
            // $('#kode_member').on("keyup input", function(){
            // var inputVal = $(this).val();
            var inputVal = $('#kode_member').val();
            // $('#treatment').html('');
            req++
            if (inputVal.length) {
                $.ajax({
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "kode_member": inputVal,
                    },
                    url: "/lookup/member",
                    type: "get",
                    dataType: "json",
                    beforeSend: function() {
                        if (req > 1) req -= 1;
                    },
                    success: function(data) {
                        console.log(data);
                        if (req == 1) {
                            if (data.status == 'success') {
                                var treatment = data.treatment;
                                $('#member').val(1);
                                $('#nama').val(data.data[0].nama);
                                $('#telp').val(data.data[0].telp);
                                $('#nama').prop('readonly', true);
                                $('#telp').prop('readonly', true);
                                // $('#treatment').append('<option value="">Konsultasi</option>');
                                // $.each(treatment, function(key, row){
                                // 	$('#treatment').append('<option value="'+row.code+'">'+row.name+'</option>');
                                // });
                            } else {
                                alert('Member Tidak Ditemukan');
                                $('#member').val(0);
                                $('#nama').val('');
                                $('#telp').val('');
                                $('#nama').prop('readonly', false);
                                $('#telp').prop('readonly', false);
                                // $('#treatment').append('<option value="">Konsultasi</option>');
                            }
                            req -= 1;
                        }
                    }
                });
            }
            // }); 
        }
        var req = "";
        var treatment = '{{ $edit->nobase }}';
        var treatment = '{{ $edit->treatment_id }}';

        $('#position').html('');
        if (treatment.length) {
            // Ajax untuk mendapatkan data posisi
            $.ajax({
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                url: "/photo/posisi/" + treatment,
                type: "get",
                dataType: "json",
                success: function(data) {
                    if (data.status == 'success') {
                        console.log(data);
                        updatePositionList(data.data);
                    } else {
                        fo();
                    }
                }
            });
        } else {
            fo();
        }

        function updatePositionList(data) {
            var positionListHTML = '<ul>';
            @foreach($photos as $photo)
            var previousPhoto = '{{ asset($photo->photo) }}';
            var positionId = '{{ $photo->position_id }}';
            var positionName = '{{ $photo->position_name }}';
            var treatmentId = '{{ $photo->treatment_id }}';
            if (previousPhoto) {
                positionListHTML += '<li>';
                positionListHTML += '<p>' + positionName + '</p>';
                positionListHTML += '<img src="' + previousPhoto + '" alt="Previous Photo" style="max-width: 100px; margin-top: 10px;">';
                positionListHTML += '<input type="file" class="form-control-file" name="photo[]">';
                positionListHTML += '<input type="hidden" class="form-control-file" value="' + positionId + '" name="position[]">';
                positionListHTML += '</li>';
            }
            @endforeach

            positionListHTML += '</ul>';
            $('#position-list-container').html(positionListHTML);
        }
    }
</script>
@endsection