@extends('../layouts.app')
@section('style')
    <link href="{{ asset('/css/lightbox.css') }}" rel="stylesheet">
    <style type="text/css">
        .nav-tabs {
            background-color: #ffffff;
            border-bottom: 2px solid #ebebeb;
        }

        .nav-tabs>li {
            padding: 10px;
        }

        a:link {
            color: #FFD571;
            text-decoration: none;
        }

        a:visited {
            color: #FFD571;
            text-decoration: none;
        }

        a:hover {
            color: #FFD571;
            text-decoration: none;
        }

        a:active {
            color: #FFD571;
            text-decoration: none;
        }
    </style>
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">POSISI</h5>
                <br>
                <a href="{{ url('/dashboard/position/create') }}" class="btn btn-dark">Tambah</a>
                {{-- <a href="{{url('dashboard/treatment_position')}}" class="btn btn-dark">Posisi Perawatan</a> --}}
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
                <div class="tab-container">
                    <ul class="nav nav-tabs" id="tab">
                        @foreach ($role as $i => $s)
                            <li class="t t-{{ str_replace(' ', '_', $s->name) }}"><a
                                    id="t-{{ str_replace(' ', '_', $s->name) }}"
                                    href="#{{ str_replace(' ', '_', $s->name) }}"
                                    data-toggle="tab">{{ strtoupper($s->name) }}</a></li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        <br>
                        @foreach ($role as $i => $s)
                            <div id="{{ str_replace(' ', '_', $s->name) }}"
                                class="tab-pane @if ($i == 0) active @endif cont">
                                <table class="table table-curved text-center dataTable-{{ $s->id }}" id="dataTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="font-weight-normal">
                                            <th class="font-weight-normal">No</th>
                                            <th class="font-weight-normal">Nama</th>
                                            <th class="font-weight-normal">Status</th>
                                            <th class="font-weight-normal">Brand</th>
                                            <!-- <th class="font-weight-normal">Foto</th> -->
                                            <th class="font-weight-normal">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (Auth::user()->role == 'super admin')
                                            @foreach (Position::getByRole($s->id) as $i => $row)
                                                <tr class="bayangan">
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>
                                                        @if ($row->status == 1)
                                                            Aktif
                                                        @else
                                                            Tidak Aktif
                                                        @endif
                                                    </td>
                                                    <td>{{ $row->brand['name'] }}</td>
                                                    <td>
                                                        <a href="{{ url('dashboard/position/edit/' . $row->id) }}"
                                                            class="btn btn-dark"> Edit </a>&nbsp;<a href="#"
                                                            class="btn btn-danger"
                                                            onclick="del('{{ url('dashboard/position/delete', $row->id) }}')">
                                                            Delete </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            @foreach (Position::getByRoleAndBrand($s->id, Auth::user()->brand_id) as $i => $row)
                                                <tr class="bayangan">
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>
                                                        @if ($row->status == 1)
                                                            Aktif
                                                        @else
                                                            Tidak Aktif
                                                        @endif
                                                    </td>
                                                    <td>{{ $row->brand['name'] }}</td>
                                                    <td>
                                                        <a href="{{ url('dashboard/position/edit/' . $row->id) }}"
                                                            class="btn btn-dark"> Edit </a>&nbsp;<a href="#"
                                                            class="btn btn-danger"
                                                            onclick="del('{{ url('dashboard/position/delete', $row->id) }}')">
                                                            Delete </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
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
    </script>
    <script type="text/javascript">
        var tp = window.location.hash.substr(1);
        $('.t-' + tp).attr('style', 'background: #000; color: #fff;');
        $('#tab a').click(function(e) {
            $('.t').attr('style', 'background: #fff');
            e.preventDefault();
            $(this).tab('show');
            var t = $(this).attr('id');
            $('.' + t).attr('style', 'background: #000; color: #fff;');
        });

        $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
            var id = $(e.target).attr("href").substr(1);
            window.location.hash = id;
        });

        var hash = window.location.hash;
        $('#tab a[href="' + hash + '"]').tab('show');
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            @foreach ($role as $s)
                $('.dataTable-{{ $s->id }}').DataTable();
            @endforeach
        });
    </script>
@endsection
