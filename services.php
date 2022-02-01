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

    <title>Services - Company Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- pluying -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
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
                    <li><a href="services.php">Services</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <a><?php echo'Bienvenido '.$_SESSION['Nombre'];?></a>
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
                    <h2>Services</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Services</li>
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
                <div class="col-lg-14">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th scope="col">GRUPO</th>
                                <th scope="col">DOCENCIA</th>
                                <th scope="col">ACTIVIDAD</th>
                                <th scope="col">SUBACTIVIDAD</th>
                                <th scope="col">SUBACTIVIDAD</th>
                                <th scope="col">SUBACTIVIDAD</th>
                                <th scope="col">SUBACTIVIDAD</th>
                                <th scope="col">ARCHIVOS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>
                                    <?php

                                        /*
                                      * Código para mostrar datos dinámicamente en un combobox.
                                        */

                                        include 'forms/conexion.php';

                                        $query = 'SELECT * FROM Actividades';

                                        $result = $conexion->query($query);

                                    ?>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="actividades" id="actividades">
                                    <option selected>Seleccione una actividad</option>
                                    <?php    
                                    while ( $row = $result->fetch_assoc() )    
                                    {
                                    ?>
                                    <option value="<?php echo $row['idActividades']; ?> " ><?php echo $row['Actividad'];?></option>
                                    <?php
                                     }    
                                    ?>  
                                    </select>
                                    </td>

                                    <td>
                                    <?php
                                        include 'forms/conexion.php';

                                        $dc = $_POST['actividades'];

                                        $query = "SELECT idSub_Actividad, sub_Actividad, Actividades_idActividades FROM sub_actividad INNER JOIN actividades ON sub_Actividad.Actividades_idActividades = actividades.idActividades WHERE Actividades_idActividades =1";
                                        
                                        $result = $conexion->query($query);

                                    ?>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Sub_actividad" id="Sub_actividad">
                                    <option selected>Seleccione una actividad</option>
                                    <?php    
                                    while ( $row = $result->fetch_array() )    
                                    {
                                    ?>
                                    <option value="<?php echo $row['idSub_Actividad']; ?> " ><?php echo $row['sub_Actividad'];?></option>
                                    <?php
                                     }    
                                    ?>  
                                    </select>
                                    </td>
                                    <td>
                                    <?php
                                        include 'forms/conexion.php';

                                        $query = 'SELECT idSub_sub_Actividades , Sub_sub_Actividad, Sub_Actividad_idSub_Actividad FROM Sub_sub_actividades INNER JOIN sub_actividad ON sub_sub_actividades.Sub_Actividad_idSub_Actividad = sub_actividad.idSub_Actividad WHERE Sub_Actividad_idSub_Actividad =1';

                                        $result = $conexion->query($query);

                                    ?>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Sub_sub_Actividades" id="Sub_sub_Actividades">
                                    <option selected>Seleccione una actividad</option>
                                    <?php    
                                    while ( $row = $result->fetch_array() )    
                                    {
                                    ?>
                                    <option value="<?php echo $row['idSub_sub_Actividades']; ?> " ><?php echo $row['Sub_sub_Actividad'];?></option>
                                    <?php
                                     }    
                                    ?>  
                                    </select>
                                </td>
                                <td>
                                <?php
                                        include 'forms/conexion.php';

                                        $query = 'SELECT idSub_sub_sub_Actividades , Sub_sub_sub_Actividad, Sub_sub_Actividades_idSub_sub_Actividades FROM sub_sub_sub_actividades INNER JOIN sub_sub_actividades ON sub_sub_sub_actividades.Sub_sub_Actividades_idSub_sub_Actividades = sub_sub_actividades.idSub_sub_Actividades WHERE Sub_sub_Actividades_idSub_sub_Actividades =5';

                                        $result = $conexion->query($query);

                                    ?>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Sub_sub_sub_Actividades" id="Sub_sub_sub_Actividades">
                                    <option selected>Seleccione una actividad</option>
                                    <?php    
                                    while ( $row = $result->fetch_array() )    
                                    {
                                    ?>
                                    <option value="<?php echo $row['idSub_sub_sub_Actividades']; ?> " ><?php echo $row['Sub_sub_sub_Actividad'];?></option>
                                    <?php
                                     }    
                                    ?> 
                                    </select>
                                </td>
                                <td>
                                <?php
                                        include 'forms/conexion.php';

                                        $query = 'SELECT idSub_sub_sub_sub_Actividades , Sub_sub_sub_sub_Actividad, Sub_sub_sub_Actividades_idSub_sub_sub_Actividades FROM sub_sub_sub_sub_actividades INNER JOIN sub_sub_sub_actividades ON sub_sub_sub_sub_actividades.Sub_sub_sub_Actividades_idSub_sub_sub_Actividades = sub_sub_sub_actividades.idSub_sub_sub_Actividades WHERE Sub_sub_sub_Actividades_idSub_sub_sub_Actividades =7';

                                        $result = $conexion->query($query);

                                    ?>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Sub_sub_sub_sub_Actividades" id="Sub_sub_sub_sub_Actividades">
                                    <option selected>Seleccione una actividad</option>
                                    <?php    
                                    while ( $row = $result->fetch_array() )    
                                    {
                                    ?>
                                    <option value="<?php echo $row['idSub_sub_sub_sub_Actividades']; ?> " ><?php echo $row['Sub_sub_sub_sub_Actividad'];?></option>
                                    <?php
                                     }    
                                    ?> 
                                    </select>
                                </td>
                                <td>
                                    <form action="subirpdf.php" method="post" enctype="multipart/form-data">
                                        <input type="file" class="form-control" aria-label="Upload">
                                        <button class="btn btn btn-primary" type="submit">Button</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                               <td>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>MENU</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>MENU</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                        <button class="btn btn btn-primary" type="button" id="inputGroupFileAddon04">Button</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mark</td>
                               <td>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>MENU</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>MENU</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                        <button class="btn btn-primary" type="button" id="inputGroupFileAddon04">Button</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Mark</td>
                               <td>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>MENU</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>MENU</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                        <button class="btn btn btn-primary" type="button" id="inputGroupFileAddon04">Button</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script language="javascript">
        $(document).ready(function(){
            $("#actividades").on('change', function () {
                $("#actividades option:selected").each(function () {
                    idActividades =$(this).val();
                  $.post("forms/consultas.php", { idActividades: idActividades}, function(data){
                 $("#Sub_actividad").html(data);
               });			
            });
        });
    });
    </script>



    <!-- End pluying -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
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