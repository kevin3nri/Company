<?php


 $estructura = dirname(__FILE__) . "/../docs/";
 if (!file_exists($estructura)) {
     if (!mkdir($estructura, 0777, true)) {
         die('Fallo al crear la carpeta...');
    
    }
}
?>