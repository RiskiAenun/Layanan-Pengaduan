<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sbdadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sbdadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">PEKAT</h2>
            <P class="text-center text-white mb-5">Pengaduan Masyarakat</P>
            <div class="card mt-5">
                <div class="card-body"> --}}
                    <body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block "><img src="{{ asset('images/daftar.png') }}" width="500"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                    <form action="{{ route('pekat.register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Lengkap" >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="telp" placeholder="No. Telp">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">REGISTER</button>
                    </form>
                </div>
            </div>
            @if (Session::has('pesan'))
            <div class="alert alert-danger mt-2">
                {{ Session::get('pesan') }}
            </div>
            @endif
            <a href="{{ route('pekat.index') }}" class="btn btn-warning text-white mt-3" style="width: 100%">Kembali ke Halaman Utama</a>
        </div>
    </div>
</div>

 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
