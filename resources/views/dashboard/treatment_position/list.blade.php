@extends('../layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">Master Perawatan Posisi</h5>
                <br>
                <a href="{{ url('/dashboard/treatment_position/create') }}" class="btn btn-dark">Tambah</a>
            </div>
            @if ($message = Session::get('alert'))
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                        </div>
                        <div class="col-md-3">
                            <div role="alert" class="alert alert-primary alert-dismissible notif">
                                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span
                                        aria-hidden="true" class="mdi mdi-close"></span></button><span
                                    class="icon mdi mdi-check"></span><span
                                    style="font-size: 13px;">{{ $message }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-curved text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="font-weight-normal">
                                <th class="font-weight-normal">No</th>
                                <th class="font-weight-normal">Perawatan</th>
                                <th class="font-weight-normal">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $treatment_ids = []; // Variabel untuk menyimpan id perawatan yang sudah ditampilkan
                            $nomor = 1; // Nomor unik untuk setiap perawatan
                            @endphp
                            @foreach ($data as $i => $d)
                                @if (!in_array($d->treatment['id'], $treatment_ids))
                                    <tr class="bayangan">
                                        <td>{{ $nomor }}</td>
                                        <td>{{ $d->treatment['name'] }}</td>
                                        <td>
                                            <a href="{{ url('dashboard/treatment_position/edit/' . $d->id) }}"
                                                class="btn btn-dark"> Edit </a>
                                            <button class="btn btn-dark detail-button" data-toggle="modal"
                                                data-target="#detailModal"
                                                data-treatment-id="{{ $d->treatment['id'] }}">Detail</button>
                                        </td>
                                    </tr>
                                    @php
                                    $treatment_ids[] = $d->treatment['id'];
                                    $nomor++; // Tambahkan nomor setiap kali perawatan baru ditampilkan
                                    @endphp
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Detail Position</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>Treatment Name: <span id="treatmentName"></span></h6>
                        <h6>Positions:</h6>
                        <ul id="positionList"></ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection