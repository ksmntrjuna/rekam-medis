@extends('../layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">FOTO</h5>
                <br>
                <div class="row">
                    <div class="col-sm-8">
                        <a href="{{ url('/dashboard/photo/create') }}" class="btn btn-dark">Tambah</a>
                    </div>
                    <div class="col-sm-4">
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        style="background: transparent; color: #000; border: 0;">Search : </span>
                                </div>
                                <input style="border: 1px solid grey;" type="text" class="form-control" id="nobase"
                                    name="nobase" value="{{ $get->nobase }}" placeholder="Masukkan Kode Member"
                                    aria-label="Masukkan Kode Member" title="Masukkan Kode Member"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary"
                                        style="background:#fff; color: grey; border: 0; border-top: 1px solid grey; border-bottom: 1px solid grey;"
                                        type="button" onclick="clean()">X</button>
                                    <button class="btn btn-dark" type="submit"><i
                                            class="fas fa-fw fa-search text-kuning"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-curved text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="font-weight-normal">
                                    <th class="font-weight-normal">No</th>
                                    <th class="font-weight-normal">Kode Member</th>
                                    <th class="font-weight-normal">Kode Treatment</th>
                                    <th class="font-weight-normal">Posisi</th>
                                    <th class="font-weight-normal">Foto</th>
                                    <th class="font-weight-normal">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $currentTreatment = '';
                                    $currentNobase = '';
                                    $photosInGroup = [];
                                    $rowNumber = 1; // Counter variable for row numbering
                                @endphp

                                @foreach ($mergedData as $i => $row)
                                    {{-- Check if the current treatment or nobase is different from the previous row --}}
                                    @if ($row->treatmentPosition->treatment->code !== $currentTreatment || $row->nobase !== $currentNobase)
                                        {{-- Display the last group if there are any remaining photos --}}
                                        @if ($i > 0)
                                            <tr class="bayangan">
                                                <td>{{ $rowNumber }}</td>
                                                <td>{{ $photosInGroup[0]->nobase }}</td>
                                                <td>{{ $photosInGroup[0]->treatmentPosition->treatment->name }}</td>
                                                <td>{{ implode(', ', array_column($photosInGroup, 'posisi')) }}</td>
                                                <td>
                                                    @foreach ($photosInGroup as $photo)
                                                        <a href="{{ $photo->photo }}">
                                                            <div style="display: inline-block; margin-right: 10px;">
                                                                <img src="{{ asset($photo->photo) }}" alt="image"
                                                                    width="50" height="50">
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ url('dashboard/photo/edit/' . $photosInGroup[0]->nobase . '/' . $photosInGroup[0]->treatment_id) }}"
                                                        class="btn btn-dark"> Edit </a>&nbsp;
                                                    <a href="#" class="btn btn-dark"
                                                        onclick="del('{{ url('dashboard/photo/delete', [$photosInGroup[0]->nobase, $photosInGroup[0]->treatment_id]) }}')">
                                                        Hapus </a>

                                                    <!-- <a href="#" class="btn btn-dark" onclick="del('{{ url('dashboard/photo/delete', $photosInGroup[0]->id) }}')"> Hapus </a> -->
                                                </td>
                                            </tr>
                                            @php
                                                $rowNumber++; // Increment the row number
                                            @endphp
                                        @endif

                                        {{-- Start a new group --}}
                                        @php
                                            $currentTreatment = $row->treatmentPosition->treatment->code;
                                            $currentNobase = $row->nobase;
                                            $photosInGroup = [$row];
                                        @endphp
                                    @else
                                        {{-- Add photo to the current group --}}
                                        @php
                                            $photosInGroup[] = $row;
                                        @endphp
                                    @endif
                                @endforeach

                                {{-- Display the last group if there are any remaining photos --}}
                                @if (count($photosInGroup) > 0)
                                    <tr class="bayangan">
                                        <td>{{ $rowNumber }}</td>
                                        <td>{{ $photosInGroup[0]->nobase }}</td>
                                        <td>{{ $photosInGroup[0]->treatmentPosition->treatment->name }}</td>
                                        <td>{{ implode(', ', array_column($photosInGroup, 'posisi')) }}</td>
                                        <td>
                                            @foreach ($photosInGroup as $photo)
                                                <a href="{{ $photo->photo }}">
                                                    <div style="display: inline-block; margin-right: 10px;">
                                                        <img src="{{ asset($photo->photo) }}" alt="image" width="50"
                                                            height="50">
                                                    </div>
                                                </a>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ url('dashboard/photo/edit/' . $photosInGroup[0]->nobase . '/' . $photosInGroup[0]->treatment_id) }}"
                                                class="btn btn-dark"> Edit </a>&nbsp;
                                            <a href="#" class="btn btn-dark"
                                                onclick="del('{{ url('dashboard/photo/delete', [$photosInGroup[0]->nobase, $photosInGroup[0]->treatment_id]) }}')">
                                                Hapus </a>

                                            <!-- <a href="#" class="btn btn-dark" onclick="del('{{ url('dashboard/photo/delete', $photosInGroup[0]->id) }}')"> Hapus </a> -->
                                        </td>
                                    </tr>
                                @endif
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <div id="delete" tabindex="-1" role="dialog" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                            <h3>Perhatian!</h3>
                            <p>Anda yakin akan menghapus data?</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <div class="xs-mt-50">
                                <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Batal</button>
                                <i id="del"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('script')
        <script type="text/javascript">
            function del(url) {
                $('#delete').modal();
                $('#del').html('<a class="btn btn-danger" href="' + url + '">Hapus</a>');
            }

            function clean() {
                $('#nobase').val('');
                window.location.href = '?nobase=';
            }
        </script>
        <script type="text/javascript">
            $('.table').dataTable({
                "searching": false
            });
        </script>
    @endsection
