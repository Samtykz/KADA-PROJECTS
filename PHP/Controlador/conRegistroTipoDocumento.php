<?php
/** @SuppressWarnings("php:S4833") */
require_once '../../Modelo/Conexion.php'; // NOSONAR
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['registrarTD'])) {

    $nombre = $_POST['nombreDocumento'];


    if (empty($nombre)) {
            
        echo 'Error: Todos los campos son requeridos.';
        exit;
    }

    $sql = "INSERT INTO tipoDocumento (nombreDocumento)
          VALUES ('$nombre')";
    
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo 'Registro exitoso.';
        header('Location: ../Read/viTipoDocumento.php');
    } else {
        echo 'Error al registrar.';
    }
}
