@extends('../layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">USER</h5>
                @if ($errors->any())
                    <br>
                    <div role="alert" class="alert alert-warning alert-dismissible">
                        <button type="button" data-dismiss="alert" aria-label="Close" class="close">x</button><span
                            class="icon mdi mdi-alert-triangle"></span><strong>Perhatian!</strong><br>
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ url('/dashboard/user/store') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="name"
                                value="{{ old('name') }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>NIK</label>
                            <input type="text" class="form-control" placeholder="NIK" name="username"
                                value="{{ old('username') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email"
                                value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <!-- Dropdown Role -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Role</label>
                            <select class="form-control" name="role" required="">
                                <option value="">-- Pilih Role --</option>
                                @foreach ($roles as $r)
                                    <option value="{{ $r->name }}">{{ strtoupper($r->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if (Auth::user()->role == 'super admin')
                            <div class="form-group col-md-6">
                                <label>Brand</label>
                                <select class="form-control" name="brand" id="brand">
                                    <option value="">-- Pilih Brand --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @else
                            <!-- Hidden input for brand_id -->
                            <input type="hidden" name="brand" value="{{ Auth::user()->brand_id }}">
                        @endif

                        <div class="form-group col-md-6">
                            <label>Cabang</label>
                            @if (Auth::user()->role == 'super admin')
                                <select class="form-control select2" name="branch" id="outlet" style="width: 100%;">
                                    <!-- Tidak perlu opsi pertama -->
                                </select>
                            @elseif (Auth::user()->role == 'admin')
                                <select class="form-control select2" name="branch" id="outlet" style="width: 100%;">
                                    <option value="">-- Pilih Cabang --</option>
                                    @foreach ($outlets as $outlet)
                                        <option value="{{ $outlet->code }}">
                                            {{ $outlet->outlet_name }}</option>
                                    @endforeach
                                </select>
                            @endif
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
            $('#brand').change(function() {
                var brandId = $(this).val();

                // Pastikan brandId tidak kosong sebelum membuat permintaan AJAX
                if (brandId) {
                    // Menggunakan Ajax untuk mendapatkan daftar outlet berdasarkan brand
                    $.ajax({
                        url: '{{ route('getOutletsByBrand', ['brandId' => ':brandId']) }}'.replace(
                            ':brandId', brandId),
                        method: 'GET',
                        success: function(data) {
                            console.log(data);
                            // Menghapus opsi yang ada
                            $('#outlet').empty();

                            // Menambahkan opsi outlet baru
                            for (var i = 0; i < data.length; i++) {
                                $('#outlet').append('<option value="' + data[i].code + '">' +
                                    data[i].outlet_name + '</option>');
                            }
                        }
                    });
                }
            });

            // Inisialisasi dropdown outlet saat halaman dimuat
            var initialBrandId = $('#brand').val();
            if (initialBrandId) {
                // Panggil fungsi Ajax untuk mendapatkan daftar outlet berdasarkan brand awal
                $.ajax({
                    url: '{{ route('getOutletsByBrand', ['brandId' => ':brandId']) }}'.replace(':brandId',
                        initialBrandId),
                    method: 'GET',
                    success: function(data) {
                        console.log(data);
                        // Menambahkan opsi outlet awal saat halaman dimuat
                        for (var i = 0; i < data.length; i++) {
                            $('#outlet').append('<option value="' + data[i].code + '">' +
                                data[i].outlet_name + '</option>');
                        }
                    }
                });
            }

            // Trigger brand change on page load to initialize outlets
            $('#brand').change();
        });
    </script>
    <!-- /.container-fluid -->
@endsection
