<?php
    include 'conexion.php';

    $usuario = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $phone = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['password'];
    $address = $_POST['dirección'];

    $query ="INSERT INTO personal(0,Nombre, Apellido, Telefono, Correo, Password, Dirección)
    VALUES ('', '$usuario', '$apellido','$phone' ,'$correo', '$contraseña', '$address')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
           <script>
                alert("Usuario almacenado exitosamente");
                window.location = " ../index.php";
           </script>
        ';
    }else{
        echo '
           <script>
                alert("Intentalo de nuevo,usuario no almacenado");
                window.location = "../index.php";
           </script>
        ';
    }
    mysqli_close($conexion);
?>