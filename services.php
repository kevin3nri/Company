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
    <!--<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->

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
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
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
                            <form action="forms/subirpdf.php" method="POST" enctype="multipart/form-data">
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $_SESSION['Nombre'];?></td>
                                    <td>
                                        <?php
                                        include 'forms/conexion.php';
                                            
                                        $query = "SELECT * FROM actividades";
                                        
                                        $result = $conexion->query($query);

                                        ?>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="actividades" id="actividades">
                                    <option value="">Seleccione una actividad</option>
                                    <?php while ( $row = $result->fetch_assoc() ) { ?>
                                    <option value="<?php echo $row["idActividades"]; ?>" ><?php echo $row["Actividad"];?></option> 
                                    <?php } ?>
                                    </select>
                                    </td>

                                    <td>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Sub_actividad" id="Sub_actividad">
                                        <option value="">Seleccione una actividad</option>
                                    </select>
                                    </td>

                                    <td>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Sub_sub_Actividad" id="Sub_sub_Actividad">
                                        <option value="">Seleccione una actividad</option>
                                    </select>
                                    </td>

                                    <td>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Sub_sub_sub_Actividad" id="Sub_sub_sub_Actividad">
                                        <option value="">Seleccione una actividad</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Sub_sub_sub_sub_Actividad" id="Sub_sub_sub_sub_Actividad">
                                        <option value="">Seleccione una actividad</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="file" class="form-control" aria-label="Upload" name="archivo1" id="archivo1">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                        </input>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <h3>Tecnologico de Estudios Superiores de Chalco</h3>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <br><strong>Dirección: </strong>Carretera Federal México Cuautla s/n, La Candelaria Tlapala, Chalco, Edo. de México <br>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <br><strong>Telefono: </strong>(0155) 59823503, 59823504, 59820848 y 59821089 <br>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <br><strong>Correo: </strong>teschalco@hotmail.com depto.controlescolar@tesch.edu.mx <br>
                    </div>
                    <center>
                        <p>kevin enrique @ 2022 | TESCHA-Ingeniería Informática</p>
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
            $("#actividades").on('change', function () {//cuando actividades cambia de valor se ejecuta toda la función de abajo
                idActividades = $(this).val();
                console.log("valor de idactividades = " + idActividades);//imprimir en consola
                //petición ajax
                $.ajax({
                    url: 'forms/consultas.php',
                    type: 'post',
                    dataType: 'json',
                    //enviar al archivo php la variable
                    data: {
                        idActividades : idActividades
                    },
                    //si el resultado es satisfactorio realiza la siguiente acción
                    success: function (response) {
                        var len = response.length; //longitud de arreglo
                        $("#Sub_actividad").empty();//borra las opciones que hay dentro del select antes de meter las respuestas del php
                        $("#Sub_actividad").prepend("<option value=''></option>");//agrega una option vacia
                        for (var i = 0; i < len; i++) {//ciclo for del tamaño del arreglo obtenido
                            var nombre = response[i]['nombre'];//guardar en variable nombre la columna de nombre de consulta en php
                            var idSub_Actividad = response[i]['idSub_Actividad'];
                            $("#Sub_actividad").append("<option value='" + idSub_Actividad + "'>" + nombre + "</option>");//agrega las opciones obtenidas del php
                            console.log("nombre = " + nombre); //imprime en consola de la pagina las variables obtenidas del php
                        }
                        console.log("len = " + len);
                    },
                    error: function() { 
                        console.log("Error");
                    }   
                });
            });
        });
        //2        
        $("#Sub_actividad").on('change', function () {//cuando actividades cambia de valor se ejecuta toda la función de abajo
            idSub_Actividad = $(this).val();
            console.log("valor de idSub_Actividad = " + idSub_Actividad);//imprimir en consola
            //petición ajax
            $.ajax({
                url: 'forms/consulta2.php',
                type: 'post',
                dataType: 'json',
                //enviar al archivo php la variable
                data: {
                    idSub_Actividad : idSub_Actividad
                },
                //si el resultado es satisfactorio realiza la siguiente acción
                success: function (response) {
                    var len = response.length; //longitud de arreglo
                    $("#Sub_sub_Actividad").empty();//borra las opciones que hay dentro del select antes de meter las respuestas del php
                    $("#Sub_sub_Actividad").prepend("<option value=''></option>");//agrega una option vacia
                    for (var i = 0; i < len; i++) {//ciclo for del tamaño del arreglo obtenido
                        var nombre = response[i]['nombre'];
                        var idSub_sub_Actividades = response[i]['idSub_sub_Actividades'];//guardar en variable nombre la columna de nombre de consulta en php
                        $("#Sub_sub_Actividad").append("<option value='" + idSub_sub_Actividades + "'>" + nombre + "</option>");//agrega las opciones obtenidas del php
                        console.log("idSub_Actividad = " + idSub_Actividad); //imprime en consola de la pagina las variables obtenidas del php
                    }
                     console.log("len = " + len);
                },
                error: function() { 
                     console.log("Error");
                }   
            });
        });
        //3
        $("#Sub_sub_Actividad").on('change', function () {//cuando actividades cambia de valor se ejecuta toda la función de abajo
            idSub_sub_Actividades = $(this).val();
            console.log("valor de idSub_sub_Actividades = " + idSub_sub_Actividades);//imprimir en consola
            //petición ajax
            $.ajax({
                url: 'forms/consulta3.php',
                type: 'post',
                dataType: 'json',
                //enviar al archivo php la variable
                data: {
                    idSub_sub_Actividades : idSub_sub_Actividades
                },
                //si el resultado es satisfactorio realiza la siguiente acción
                success: function (response) {
                    var len = response.length; //longitud de arreglo
                    $("#Sub_sub_sub_Actividad").empty();//borra las opciones que hay dentro del select antes de meter las respuestas del php
                    $("#Sub_sub_sub_Actividad").prepend("<option value=''></option>");//agrega una option vacia
                    for (var i = 0; i < len; i++) {//ciclo for del tamaño del arreglo obtenido
                        var nombre = response[i]['nombre'];
                        var idSub_sub_sub_Actividades = response[i]['idSub_sub_sub_Actividades'];//guardar en variable nombre la columna de nombre de consulta en php
                        $("#Sub_sub_sub_Actividad").append("<option value='" + idSub_sub_sub_Actividades + "'>" + nombre + "</option>");//agrega las opciones obtenidas del php
                        console.log("idSub_sub_Actividades = " + idSub_sub_Actividades); //imprime en consola de la pagina las variables obtenidas del php
                    }
                     console.log("len = " + len);
                },
                error: function() { 
                     console.log("Error");
                }   
            });
        });          
        //4       
        $("#Sub_sub_sub_Actividad").on('change', function () {//cuando actividades cambia de valor se ejecuta toda la función de abajo
            idSub_sub_sub_Actividades = $(this).val();
            console.log("valor de idSub_sub_sub_Actividades = " + idSub_sub_sub_Actividades);//imprimir en consola
            //petición ajax
            $.ajax({
                url: 'forms/consulta4.php',
                type: 'post',
                dataType: 'json',
                //enviar al archivo php la variable
                data: {
                    idSub_sub_sub_Actividades : idSub_sub_sub_Actividades
                },
                //si el resultado es satisfactorio realiza la siguiente acción
                success: function (response) {
                    var len = response.length; //longitud de arreglo
                    $("#Sub_sub_sub_sub_Actividad").empty();//borra las opciones que hay dentro del select antes de meter las respuestas del php
                    $("#Sub_sub_sub_sub_Actividad").prepend("<option value=''></option>");//agrega una option vacia
                    for (var i = 0; i < len; i++) {//ciclo for del tamaño del arreglo obtenido
                        var nombre = response[i]['nombre'];
                        var idSub_sub_sub_sub_Actividades = response[i]['idSub_sub_sub_sub_Actividades'];//guardar en variable nombre la columna de nombre de consulta en php
                        $("#Sub_sub_sub_sub_Actividad").append("<option value='" + idSub_sub_sub_sub_Actividades + "'>" + nombre + "</option>");//agrega las opciones obtenidas del php
                        console.log("idSub_sub_sub_Actividades = " + idSub_sub_sub_Actividades); //imprime en consola de la pagina las variables obtenidas del php
                    }
                    console.log("len = " + len);
                },
                error: function() { 
                    console.log("Error");
                }   
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
    <!-- <script src="assets/js/main.js"></script> -->

</body>

</html>