@extends('../layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">Master Perawatan</h5>
            </div>
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card-body">
                <form method="post" action="{{ url('/dashboard/treatment/store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Kode</label>
                            <input type="text" class="form-control" placeholder="Kode" name="code" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="name" required>
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