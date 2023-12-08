@extends('../layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">Master Perawatan Posisi</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('dashboard/treatment_position/store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Jika user adalah super admin, tampilkan dropdown brand -->
                        @if (Auth::user()->role === 'super admin')
                            <div class="form-group col-md-8">
                                <label>Brand</label>
                                <select class="form-control" name="brand" id="brand">
                                    <option value="">-- Pilih Brand --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ strtoupper($brand->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        <div class="form-group col-md-8">
                            <label>Perawatan</label>
                            <select class="form-control" name="treatment" required="">
                                <option value="">-- Pilih Perawatan --</option>
                                @foreach ($treatment as $row)
                                    <option value="{{ $row->id }}">{{ strtoupper($row->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-8">
                            <label>Posisi</label>
                            <select multiple class="form-control select2" name="position[]" required>
                                <option value=""></option>
                                @foreach ($position as $pos)
                                    <option value="{{ $pos->id }}">{{ strtoupper($pos->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark"> Simpan </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tambahkan event listener pada dropdown Brand
            $('#brand').change(function() {
                var brandId = $(this).val();
                console.log('Selected Brand ID:', brandId);

                // Kirim permintaan Ajax untuk mendapatkan data Treatment sesuai dengan Brand yang dipilih
                $.ajax({
                    url: '{{ url('/get-treatments/') }}/' + brandId,
                    type: 'GET',
                    success: function(data) {
                        // Perbarui dropdown Treatment
                        var treatmentSelect = $('select[name="treatment"]');
                        treatmentSelect.empty();
                        treatmentSelect.append(
                            '<option value="">-- Pilih Perawatan --</option>');
                        $.each(data, function(key, value) {
                            treatmentSelect.append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        });
                    }
                });

                // Kirim permintaan Ajax untuk mendapatkan data Position sesuai dengan Brand yang dipilih
                $.ajax({
                    url: '{{ url('/get-positions/') }}/' + brandId,
                    type: 'GET',
                    success: function(data) {
                        // Perbarui dropdown Position
                        var positionSelect = $('select[name="position[]"]');
                        positionSelect.empty();
                        positionSelect.append('<option value=""></option>');
                        $.each(data, function(key, value) {
                            positionSelect.append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
    <!-- /.container-fluid -->
@endsection
