<?php

include 'conexion.php';

if(isset($_GET['eliminarr'])){
    $Grupo=$_GET['eliminarr'];

    $sql="DELETE FROM  WHERE ";
    $result=mysqli_query($conexion,$sql);
    if($result){
        /*echo '<div class="alert alert-danger" role="alert">
        A simple success alert—check it out!
      </div>'*/
      header('location:portfolio.php');
    }else{
        die(mysqli_error($conexion));
    }
}

?>