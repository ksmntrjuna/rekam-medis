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
                <form method="post" action="{{ url('/dashboard/photo/upload') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-3 input-group">
                            <label>Kode Member</label>
                            <div class="input-group">
                                <input type="hidden" id="member" name="member">
                                <input type="text" class="form-control" placeholder="Kode Member"
                                    aria-label="Kode Member" id="kode_member" name="kode_member" required=""
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append" style="height: 38px;">
                                    <button class="btn btn-warning btn-sm" type="button" onclick="search()"><i
                                            class="fas fa-fw fa-search text-kuning"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Nama Member</label>
                            <div class="">
                                <input type="text" class="form-control" placeholder="Nama Member"
                                    aria-label="Kode Member" id="nama" name="nama" required="">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nomor Telepon</label>
                                    <input type="telp" class="form-control" id="telp" name="telp"
                                        placeholder="Nomor Telepon" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Tanggal Perawatan</label>
                                    <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy"
                                        placeholder="Contoh {{ date('d-m-Y') }}" id="date" name="date" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label>Jam Perawatan</label>
                            <select class="form-control" name="time" required>
                                <option value="">Pilih Jam</option>
                                @for ($i = 10; $i <= 17; $i++)
                                    <option value="{{ $i . ':00:00' }}">{{ $i . ':00' }}</option>
                                @endfor
                            </select>
                        </div>
                        @if (Auth::user()->role != 'fo')
                            <div class="form-group col-md-5">
                                <label>Perawatan</label>
                                <select class="form-control select2" style="width: 100%;" name="treatment" id="treatment">
                                    <option value="">Konsultasi</option>
                                    @foreach ($treatment as $t)
                                        <option value="{{ $t->id }}">{{ $t->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        <div class="form-group col-md-8">
                            <label>Posisi</label>
                            <!-- <select class="form-control select2" name="position" id="position" required>
                                <option value=""></option>
                            </select> -->
                            <div id="position-list-container"></div>
                        </div>

                        @if (Auth::user()->role == 'admin')
                            <div class="form-group col-md-3">
                                <label>User</label>
                                <select class="form-control select2" style="width: 100%;" name="user_id" id="user_id"
                                    required="">
                                    <option value="">User</option>
                                    @foreach ($users as $usr)
                                        <option value="{{ $usr->id }}">
                                            {{ $usr->username . ' - ' . $usr->name . ' (' . $usr->branch . ')' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label>Catatan</label>
                            <textarea class="form-control" name="note" rows="4"></textarea>
                        </div>
                    </div>
                    <!-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Foto</label>
                            <input type="file" class="form-control-file" name="photo">
                        </div>
                    </div> -->
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
        // Inisialisasi datepicker
        $('.datepicker').datepicker({
            endDate: new Date() // Set the end date to the current date
        });
        // Fungsi untuk mengisi opsi posisi
        // function fo() {
        //     '@foreach ($position as $pos)'
        //     $('#position').append('<option value="{{ $pos->id }}">{{ $pos->name }}</option>');
        //     '@endforeach'
        // }

        // Fungsi untuk menghapus input
        function del() {
            $('#kode_member').val('');
            $('#treatment').html('<option value="">Konsultasi</option>');
            $('#position').html('');
            fo();
        }

        // Fungsi untuk mencari member
        function search() {
            var inputVal = $('#kode_member').val();
            req++;
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
                            } else {
                                alert('Member Tidak Ditemukan');
                                $('#member').val(0);
                                $('#nama').val('');
                                $('#telp').val('');
                                $('#nama').prop('readonly', false);
                                $('#telp').prop('readonly', false);
                            }
                            req -= 1;
                        }
                    }
                });
            }
        }


        // Variabel untuk menyimpan jumlah request
        var req = "";

        // Dokumen siap
        $(document).ready(function() {
            // Event ketika treatment berubah
            $('#treatment').on("change", function() {
                var treatment = $(this).val();
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
                                updatePositionList(data.data);
                            } else {
                                fo();
                            }
                        }
                    });
                } else {
                    fo();
                }
            });
        });

        function updatePositionList(data) {
            var positionListHTML = '<ul>';
            $.each(data, function(key, row) {
                positionListHTML += '<li>';
                positionListHTML += row.position.name;
                positionListHTML += '<input type="file" class="form-control-file" name="photo[]">';
                positionListHTML += '<input type="hidden" class="form-control-file" value="' + row.position.id +
                    '" name="position[]">';
                positionListHTML += '</li>';
            });
            positionListHTML += '</ul>';
            $('#position-list-container').html(positionListHTML);
        }
    </script>
@endsection
