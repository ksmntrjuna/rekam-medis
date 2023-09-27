@extends('../layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">Edit Treatment Position</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('dashboard/treatment_position/update/' . $edit->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="treatment">Perawatan</label>
                            <input type="text" class="form-control" value="{{ $edit->treatment->name }}" disabled>
                            <input type="hidden" name="treatment" value="{{ $edit->treatment_id }}">
                        </div>
                        <div class="form-group col-md-8">
                            <label>Posisi</label>
                            <select multiple class="form-control select2" name="position[]">
                                @foreach ($position as $pos)
                                    <option value="{{ $pos->id }}">{{ strtoupper($pos->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @if (count($position) > 0)
                        <button type="submit" class="btn btn-dark"> Simpan </button>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
