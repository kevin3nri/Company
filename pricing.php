
<?php

session_start();

if(!isset($_SESSION['Nombre'])){
    echo'
        <script>
            alert("Por favor debes iniciar sesión");
            window.location = "index.php";
        </script>
    ';
    session_destroy();
    die();
}

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * 
  ======================================================== -->
</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="index.php" class="logo me-auto">
                <img src="assets/img/tescha1.jpg" alt="imagen" height="120" width="180"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="pricing.php">Pricing</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <a><?php echo'Bienvenido '.$_SESSION['Nombre'];?></a>
                    <li><a href="forms/cerrar_sesion.php">Cerrar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pricing</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Pricing</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <h3>Tecnologico de Estudios Superiores de Chalco</h3>
                        <div class="col-lg-3 col-md-6 footer-contact">
                            <br><strong>Adress: </strong>Carretera Federal México Cuautla s/n, La Candelaria Tlapala, Chalco, Edo. de México <br>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <br><strong>Phone: </strong>(0155) 59823503,59823504,59820848, y 59821089 <br>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <br><strong>Email: </strong>teschalco@hotmail.com depto.controlescolar@tesch.edu.mx <br>
                        </div>
                        <center>
                            <p>kevin enrique & pedro angel @ 2021 | TESCHA-Ingeniería Informática</p>
                        </center>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Bienvenido</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form action="#">
                                        <div class="mb-4">
                                            <label form="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class=" mb-4 ">
                                            <label form="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>

                                        <div class="mb-4 form-check">
                                            <input type="checkbox" name="connected" class="form-check-input">
                                            <label for="connected" class="form-check-label">Mantenerte conectado</label>
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                                        </div>
                                        <div class="my-3">
                                            <span>No tienes cuenta? <a href="#">Registrate</a></span><br>
                                            <span><a href="#">Recuperar Password</a></span>
                                        </div>
                                    </form>


                                    <div class="container w-100 my-3">
                                        <div class="row text-center">
                                            <div class="col-12">Iniciar Sesion</div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <button class="btn btn-outline-primary w-100 my-1">
                                                    <a href="http://facebook.com">
                                                   <div class="row align-items-center">
                                                        <div class="col-2">
                                                            <img src="assets/img/facebook.png" width="37" alt=""></div>
                                                        <div class="col-10 text-center">Facebook</div>
                                                    </div>
                                                </button>
                                                <div class="col">
                                                    <button class="btn btn-outline-danger w-100 my-1">
                                                         <a href="http://gmail.com">
                                                         <div class="row align-items-center">
                                                            <div class="col-2">
                                                                <img src="assets/img/google.png" width="32" alt=""></div>
                                                                    <div class="col-10 text-center">Google</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- customer login end -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!--end Modal-->
        <!--login area start-->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>