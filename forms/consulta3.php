<?php
include 'conexion.php';

$idSub_sub_Actividades = (isset($_POST['idSub_sub_Actividades'])) ? $_POST['idSub_sub_Actividades'] : '';

$users_arr = array();

$sql = "SELECT idSub_sub_sub_Actividades, Sub_sub_sub_Actividad AS nombre, Sub_sub_Actividades_idSub_sub_Actividades 
FROM sub_sub_sub_actividades WHERE Sub_sub_Actividades_idSub_sub_Actividades = '$idSub_sub_Actividades'";
$result = mysqli_query($conexion, $sql);
if (mysqli_num_rows($result) > 0) {
   while( $row = mysqli_fetch_array($result) ){
      $nombre = $row['nombre'] ;
      $idSub_sub_sub_Actividades = $row['idSub_sub_sub_Actividades'] ;      
      $users_arr[] = array("nombre" => $nombre, "idSub_sub_sub_Actividades" => $idSub_sub_sub_Actividades);
   }
}
echo json_encode($users_arr);
$conexion = null;
?>