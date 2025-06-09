
<?php
require_once '../../Modelo/Conexion.php';
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['registroadmi'])) {
 
    $nombre = $_POST['admi_nombre'];
    $apellido = $_POST['admi_apellido'];
    $telefono = $_POST['admi_telefono'];
    $direccion = $_POST['admi_direccion'];
    $correo = $_POST['admi_correo'];
    $contraseña= $_POST['admi_contrasena']; 
    $conContraseña = $_POST['confirmar_contrasena'];


    if (empty($nombre) || 
        empty($apellido) || 
        empty($telefono) || 
        empty($direccion) || 
        empty($correo) || 
        empty($contraseña) || 
        empty($conContraseña)) {
            
        echo 'Error: Todos los campos son requeridos.';
        exit;
    }

    if ($contraseña != $conContraseña) {
        echo 'Error: Las contraseñas no coinciden.';
        exit;
    }

   
    $contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);


    $sql = "INSERT INTO administrador (admi_nombre, admi_apellido, admi_telefono, admi_direccion, admi_correo, admi_contrasena)
          VALUES ('$nombre', '$apellido', '$telefono', '$direccion', '$correo', '$contraseña_encriptada')";
    
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo 'Registro exitoso.';
        header('Location: ../Read/viAdministradores.php');
    } else {
        echo 'Error al registrar.';
    }
}
?>