<?php
include 'conexion.php';

$idActividades = (isset($_POST['idActividades'])) ? $_POST['idActividades'] : '';

$users_arr = array();

$sql = "SELECT idSub_Actividad, sub_Actividad as nombre, Actividades_idActividades 
FROM sub_actividad where Actividades_idActividades = '$idActividades'";
$result = mysqli_query($conexion, $sql);
if (mysqli_num_rows($result) > 0) {
   while( $row = mysqli_fetch_array($result) ){
      $nombre = $row['nombre'] ;
      $idSub_Actividad = $row['idSub_Actividad'] ;
      $users_arr[] = array("nombre" => $nombre, "idSub_Actividad" => $idSub_Actividad);
   }
}
echo json_encode($users_arr);
$conexion = null;
?>
