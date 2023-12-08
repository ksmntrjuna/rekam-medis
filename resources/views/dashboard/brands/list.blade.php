@extends('../layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">Master Brands</h5>
                <br>
                <a href="{{ url('/dashboard/brands/create') }}" class="btn btn-dark">Tambah</a>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-curved text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="font-weight-normal">
                                <th class="font-weight-normal">No</th>
                                <th class="font-weight-normal">Brands</th>
                                <th class="font-weight-normal">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $nomor = 1;
                            @endphp
                            @foreach ($brands as $brand)
                                <tr class="bayangan">
                                    <td>{{ $nomor++ }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        <a href="{{ url('dashboard/brands/edit/' . $brand->id) }}" class="btn btn-dark">
                                            Edit </a>
                                        <form action="{{ url('dashboard/brands/destroy/' . $brand->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    @endsection
