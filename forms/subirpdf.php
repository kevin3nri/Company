<?php
include ('conexion.php');
$file_name = $_FILES["archivo1"]["name"];
$Sub_actividad = $_POST['Sub_actividad'];

$insert ="INSERT INTO sub_actividad(idSub_Actividad, Sub_Actividad, Archivo, Actividades_idActividades) 
VALUES ('','$Sub_actividad','$file_name','')";
$ingreso = mysqli_query($conexion, $insert);

$estructura = dirname(__FILE__) . "/../docs/";
    if (!file_exists($estructura)) {
        if (!mkdir($estructura, 0777, true)) {
            die('Fallo al crear la carpeta...');
        }
    }
    if($file_name !=""){
        $ext = explode(".", $file_name);
        $add = $estructura."".$file_name;
        if (move_uploaded_file($_FILES["archivo1"]["tmp_name"], $add)) {
            $ex =  strtolower($ext[1]); 
            if($ex != "pdf") @unlink($estructura."$file_name");
            echo '<script>alert("Archivo guardardo")</script> ';
            echo "<script>location.href='../services.php'</script>";
        }else{
            echo '<script>alert("Error al guardar archivo")</script> ';
        }
    }else{
        echo "error";
        echo "<script>location.href='../services.php'</script>";
    }
?>