@extends('../layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">POSISI</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('/dashboard/position/upload') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Role</label>
                            <select class="form-control" name="role_id" required="">
                                <option value="">Pilih Role</option>
                                @foreach ($role as $row)
                                    <option value="{{ $row->id }}">{{ strtoupper($row->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control" name="status" required="">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                        @if(Auth::user()->role == 'super admin')
                            <div class="form-group col-md-6">
                                <label>Brand</label>
                                <select class="form-control" name="brand_id" required="">
                                    @foreach ($brands as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @else
                            <input type="hidden" name="brand_id" value="{{ Auth::user()->brand_id }}">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark"> Simpan </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
