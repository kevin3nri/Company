<?php

    session_start();

    include ("conexion.php");

    $correo = $_POST['correo'];
    $password = $_POST['password'];
    

    $validar_login = mysqli_query($conexion, "SELECT * FROM personal WHERE correo='$correo' and password= '$password'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['Nombre'] = $correo;
        header("location: ../services.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existente por favor verifique los datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
    

?>