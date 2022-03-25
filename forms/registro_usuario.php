<?php
    
    include ("conexion.php");
    
    $matrucula = $_POST['id'];
    $usuario = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $phone = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $contraseña = $_POST['Password'];
    $contraseña = md5($_POST['Password']);
    $confirmar = $_POST['passwordconfirm'];
    $address = $_POST['Dirección'];
    $estudio = $_POST['Estudios'];

if($_POST['Password']==$_POST['passwordconfirm']){

    $sql1 = "INSERT INTO personal(idPersonal, Nombre, Apellido, Telefono, Correo, Password, Dirección, Rol_idRol,
     Grado_Estudios_idEstudios)
     VALUES ('$matrucula', '$usuario', '$apellido', '$phone', '$correo', '$contraseña', '$address', 2 ,'$estudio')";
    
    // verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM personal WHERE Correo='$correo'");
 
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    // verificar que el usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM personal WHERE Nombre='$usuario'");
 
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    $dato = mysqli_query($conexion, $sql1);

    if($dato){
        echo '
        <script>
            alert("Usuario Almacenado Exitosamente");
            window.location = "../index.php";
        </script>
    ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, Usuario no almacenado");
            window.location = "../index.php";
        </script>
    ';

    }

echo '
<script>
    alert("Usuario Almacenado Exitosamente");
    window.location = "../index.php";
</script>
';

}else{
 
echo '
    <script>
        alert("Intentalo de nuevo, contraseña no coinsiden");
        window.location = "../index.php";
    </script>
';

mysqli_close($conexion); 
}
?>