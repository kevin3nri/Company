<?php
include 'conexion.php'; 

    $estructura = dirname(__FILE__) . "/../docs/";
    if (!file_exists($estructura)) {
        if (!mkdir($estructura, 0777, true)) {
            die('Fallo al crear la carpeta...');
        }
    }
    $file_name = $_FILES["archivo"]["name"];
    if($file_name !=""){
        $ext = explode(".", $file_name);
        $add = $estructura."".$file_name;
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $add)) {
            $ex =  strtolower($ext[1]); 
            if($ex != "pdf") @unlink($estructura."$file_name");
        }
    echo "exito";
    }else{
        echo "error";
    }
?>