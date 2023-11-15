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
    <!-- /.container-fluid -->
@endsection