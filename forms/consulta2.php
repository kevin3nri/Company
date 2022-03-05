<?php
include 'conexion.php';

$idSub_Actividad = (isset($_POST['idSub_Actividad'])) ? $_POST['idSub_Actividad'] : '';

$users_arr = array();

$sql = "SELECT idSub_sub_Actividades, Sub_sub_Actividad as nombre, Sub_Actividad_idSub_Actividad 
FROM sub_sub_actividades WHERE Sub_Actividad_idSub_Actividad = '$idSub_Actividad'";
$result = mysqli_query($conexion, $sql);
if (mysqli_num_rows($result) > 0) {
   while( $row = mysqli_fetch_array($result) ){
      $nombre = $row['nombre'] ;
      $idSub_sub_Actividades = $row['idSub_sub_Actividades'] ;      
      $users_arr[] = array("nombre" => $nombre, "idSub_sub_Actividades" => $idSub_sub_Actividades);
   }
}
echo json_encode($users_arr);
$conexion = null;
?>