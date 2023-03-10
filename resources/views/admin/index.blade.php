
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMULACRO DE ADMISION</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="{{ asset("css/style.css") }}" rel="stylesheet">
        <link href="{{ asset("css/uni.css") }}" rel="stylesheet">
        <link href="{{ asset("css/aos.css") }}" rel="stylesheet">
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/style1.css") }}" rel="stylesheet">
        <link href="{{ asset("css/style-modal.css") }}" rel="stylesheet">   

        <link rel="stylesheet" href="{{ asset('css/modal.css') }}"> 



        <link href="{{ asset("css/animate.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/bootstrap-icons1.css") }}" rel="stylesheet">
        <link href="{{ asset("css/boxicons.min1.css") }}" rel="stylesheet">
        <link href="{{ asset("css/glightbox.min1.css") }}" rel="stylesheet">
        <link href="{{ asset("css/remixicon1.css") }}" rel="stylesheet">
        <link href="{{ asset("css/swiper-bundle.min.css") }}" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="{{ asset("css/style.css") }}" rel="stylesheet">
      <link href="{{ asset("css/sidebars.css") }}" rel="stylesheet">
            <!--link para tabla-->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">


        
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="blank.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Simulador de Examen</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="blank.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Usuarios</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="subcripciones.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Subcripciones</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="preguntas.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Preguntas</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->



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

<!-- Topbar Search -->
<form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-4 d-none d-lg-inline text-gray-600 small">Luis Camarena</span>
            <img class="img-profile rounded-circle"
                src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
        
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Cerrar Session
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->
 <!-- Declaracion de variables -->
                @yield('Usuarios')
                @yield('preguntas')
                @yield('Suscripciones')
                @yield('registros')
                @yield('universidad')
                @yield('carreras')
                @yield('area')
                @yield('examena')
                @yield('bloque')  
                @yield('regitroexamen')

                @yield('area-a-uni')
                @yield('area-a-unmsm')
                @yield('area-b-uni')
                @yield('area-b-unmsm')
                @yield('area-c-uni')
                @yield('area-c-unmsm')
                @yield('area-d-unmsm')
                @yield('area-e-unmsm')

                @yield('menubar')
                @yield('model')
                @yield('uni')
                @yield('universidades')
                @yield('unmsm')
                @yield('usuario')

                @yield('user')
                
                
            </div> 
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white1">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; MugCentro 2023</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Quiere Cerrar Session?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione Salir para volver a la vista principal.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}" ></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}" ></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js')}}" ></script>
    <script src="{{ asset("js/aos.js") }}"></script>
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("js/glightbox.min.js") }}"></script>
    <script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
    <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>
    <script src="{{ asset("js/validate.js") }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset("js/main.js") }}"></script>

</body>

</html>