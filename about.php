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
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- pluying -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
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
  * Template Name: Company - v4.6.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
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
                    <a><?php echo 'Bienvenido ' .$_SESSION['Nombre'];?></a>
                    <li><a href="forms/cerrar_sesion.php">Cerrar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->
    </main>
    <!-- End #main -->
    <section class="slider_section">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="car-body">
                        <table id="datos" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Grupo</th>
                                    <th>Docencia</th>
                                    <th>Actividades</th>
                                    <th>Archivo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 include 'forms/conexion.php';
                                 
                                   $sql="SELECT datos.idDatos, matricula.Profesión, personal.Nombre, carreras.Carrera, actividades.Archivo FROM datos INNER JOIN matricula ON datos.Matricula_idMatricula = matricula.idMatricula INNER JOIN personal ON personal.idPersonal = datos.Personal_idPersonal INNER JOIN carreras ON datos.Carreras_idCarrera = carreras.idCarrera INNER JOIN actividades ON datos.Actividades_idActividades = actividades.idActividades";
                                   $result = mysqli_query($conexion,$sql);
                                  
                                       while($row=mysqli_fetch_assoc($result)){
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['idDatos'] ?></th>
                                        <td><?php echo $row['Profesión'] ?></td>
                                        <td><?php echo $row['Nombre'] ?></td>
                                        <td><?php echo $row['Carrera'] ?></td>
                                        <td><?php echo $row['Archivo'] ?></td>
                                       <?php
                                       }
                                       ?>
                                    </tr>
                            </tbody>    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- pluying -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('#datos').DataTable({
            responsive: true,
            autoWidth: false,

            "language": {
                "info": "_TOTAL_registros",
                "search": "Buscar", 
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                },
                "lengthMenu": 'Mostrar <select>'+
                           '<option value="10">10</option>'+
                           '<option value="25">25</option>'+
                           '<option value="50">50</option>'+
                           '<option value="100">100</option>'+
                           '</select> registros',
                "loandingRecords": "Cargando...",
                "processing": "Procesando...",
                "emptyTable": "No hay datos",
                "zeroRecords": "No hay coincidencias",
                "infoEmpty": "",
                "infoFiltered": ""
            }
        });
    </script>

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