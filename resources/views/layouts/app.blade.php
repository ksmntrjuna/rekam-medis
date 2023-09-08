<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Natasha</title>
    <link rel="shortcut icon" href="{{asset('/img/icon.png')}}" />

    {{-- {{ asset('css/app.css') }} --}}

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" integrity="sha512-rxThY3LYIfYsVCWPCW9dB0k+e3RZB39f23ylUYTEuZMDrN/vRqLdaCBo/FbvVT6uC2r0ObfPzotsfKF9Qc5W5g==" crossorigin="anonymous" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <style type="text/css">
        .datepicker table tr td, .datepicker table tr th {
        text-align: center;
        width: 30px;
        height: 30px;
        border-radius: 4px;
        border: none;
        padding-top: 0px !important;
    }
    .select2-selection__rendered {
        line-height: 35px !important;
    }
    .select2-container .select2-selection--single {
        height: 35px !important;
    }
    .select2-selection__arrow {
        height: 35px !important;
    }
    </style>
    @yield('style')

</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion nav-kiri" id="accordionSidebar" >

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{ asset('img/icon-natasha.png') }}" alt="" width="40">
                </div>
                <div class="sidebar-brand-text mx-3">Galeri Natasha</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Tables -->
            <li class="nav-item {{Request::segment(2) === 'patient' || Request::segment(2) === 'perawatan' ? 'active' : ''}}">
                <a class="nav-link text-kuning" href="{{ route('dashboard.patient') }}"><i class="fas fa-fw fa-users text-kuning"></i><span>Perawatan</span></a>
            </li>
            @if(Auth::user()->role!='dokter' && Auth::user()->role!='admin')
            <li class="nav-item {{Request::segment(2) === 'photo' ? 'active' : ''}}">
                <a class="nav-link text-kuning" href="{{ route('dashboard.photo') }}"><i class="fas fa-fw fa-book text-kuning"></i><span>Foto</span></a>
            </li>
            @endif
            @if(Auth::user()->role=='admin')
            <li class="nav-item {{Request::segment(2) === 'user' ? 'active' : ''}}">
                <a class="nav-link text-kuning" href="{{ route('dashboard.user') }}"><i class="fas fa-fw fa-user text-kuning"></i><span>User</span></a>
            </li>
            <li class="nav-item {{Request::segment(2) === 'photo' ? 'active' : ''}}">
                <a class="nav-link text-kuning" href="{{ route('dashboard.photo') }}"><i class="fas fa-fw fa-book text-kuning"></i><span>Foto</span></a>
            </li>
           <!--  <li class="nav-item {{Request::segment(2) === 'position#fo' ? 'active' : ''}}">
                <a class="nav-link text-kuning" href="{{ route('dashboard.position') }}"><i class="fas fa-fw fa-camera-retro text-kuning"></i><span>Posisi Foto</span></a>
            </li>
            <li class="nav-item {{Request::segment(2) === 'treatment' ? 'active' : ''}}">
                <a class="nav-link text-kuning" href="{{ route('dashboard.treatment') }}"><i class="fas fa-fw fa-edit text-kuning"></i><span>Master Perawatan</span></a>
            </li> -->
            @endif
            <!-- Nav Item - Tables -->
            {{-- <li class="nav-item">
                <a class="nav-link text-kuning" href="tables.html"><i class="fas fa-fw fa-book text-kuning"></i><span>Record</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h5>{{Auth::user()->name}}</h5>( {{strtoupper(Auth::user()->role)}} )</span>
                            <img class="img-profile rounded-circle"
                            src="{{ asset('img/icon-natasha.png') }}"></a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{url('/dashboard/user/edit/'.Auth::user()->id)}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                @yield('content')


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Heptaco Digital Media 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".select2").select2();
        });
    </script>
    @yield('script')

</body>
</html>