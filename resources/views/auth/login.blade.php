<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Natasha</title>

    {{-- {{ asset('css/app.css') }} --}}

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>
<body>
    <div class="mt-5 container">
        <div class="row">
            <div class="col-sm-6 login-kiri">
                <img src="img/logo-natasha.png" class="login-logo mb-4">
                <div class="login-form">
                    <h2 class="text-center"><strong>Login</strong></h2>
                    <h5 class="text-center mb-4">Galeri Natasha</h5>
                    <form method="POST" action="{{ route('login') }}"  class="mb-4">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="NIK" name="username" value="{{old('username')}}" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
                        </div>
                        <button type="submit" class="btn btn-primary login-tombol"><b>Log In</b></button>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 login-kanan mb-6">
                <img src="img/bg.jpg" alt="" style="height: 100%;" class="login-bg">
            </div>
        </div>
    </div>

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

</body>
</html>