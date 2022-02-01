<?php

    session_start();

    include ("conexion.php");

    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $password = md5($_POST['password']);
    
    
    $validar_login = mysqli_query($conexion, "SELECT * FROM personal WHERE correo='$correo' and password= '$password'");

    if($f2 = mysqli_fetch_assoc($validar_login)){
        $_SESSION['idPersonal'] = $f2['idPersonal'];
        $_SESSION['Nombre'] = $f2['Nombre'];
        $_SESSION['Rol_idRol'] = $f2['Rol_idRol'];

        if($f2['Rol_idRol']==1){
        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
        echo "<script>location.href='../about.php'</script>";
                }
        if($f2['Rol_idRol']==2){
            echo '<script>alert("BIENVENIDO USUARIO")</script> ';
            echo "<script>location.href='../services.php'</script>";
           }
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