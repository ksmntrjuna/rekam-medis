<!-- view form edit -->
@extends('../layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">Master Brands</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('dashboard/brands/update/' . $brands->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="brand" class="form-label">Nama Brand</label>
                            <input type="text" class="form-control" id="brand" name="name" value="{{$brands->name}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark"> Simpan </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
