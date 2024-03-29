<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('images/icons.png') }}">
    <title>Pengaduan Masyarakat</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sbdadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sbdadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('sbdadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    @yield('css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

 <!--sidebar-->
 
  @include('layouts.component.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!--navbar-->
                    @include('layouts.component.navbar')
                    

                </nav>
                <!-- End of Topbar -->

           
                <!-- Begin Page Content -->
                 
                <div class="container-fluid">
                    @yield('content')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                </div>
                <!-- /.container-fluid -->
               
            </div>

            <!-- Footer -->
            @include('layouts.component.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>





    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sbdadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sbdadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sbdadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="{{asset('sbdadmin/js/sb-admin-2.min.js')}}"></script>

    <script src="{{asset('sbdadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbdadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    @yield('js')
</body>

</html>