<?php

include 'conexion.php';

if(isset($_GET['actualizarr'])){
    $idDatos=$_GET['$idDatos'];
    $Grupo=$_POST['Grupo'];
    $Docencia=$_POST['Docencia'];
    $Actividades=$_POST['Actividades'];
    $Archivo=$_POST['Archivo'];

    $sql="UPDATE SET ";
    $result=mysqli_query($conexion,$sql);
    if($result){
        /*echo '<div class="alert alert-primary" role="alert">
        A simple success alert—check it out!
      </div>'*/
      header('location:portfolio.php');
    }else{
        die(mysqli_error($conexion));
    }
}

?>