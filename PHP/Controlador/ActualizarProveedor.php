<?php 
include "../../Modelo/Conexion.php";

// Obtener el ID del administrador desde la URL
if (isset($_GET["id"])) {
    $idproveedor = $_GET["id"];
    $consulta = "SELECT * FROM proveedor WHERE documentoProveedor_PK = '$idproveedor'";
    $resultado = $conexion->query($consulta);
    $proveedor = $resultado->fetch_assoc();
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombreNuevo"];
    $telefono = $_POST["telefonoNuevo"];
    $direccion = $_POST["direccionNueva"];
    $correo = $_POST["correoNuevo"];
    $documento = $_POST["tipoDocumentoNuevo"];


    // Construir la consulta SQL dinámicamente
    $sql = "UPDATE proveedor SET ";
    $updates = array();

    if (!empty($nombre)) {
        $updates[] = "nombreProveedor='$nombre'";
    }
    if (!empty($telefono)) {
        $updates[] = "telefonoProveedor='$telefono'";
    }
    if (!empty($direccion)) {
        $updates[] = "direccionProveedor='$direccion'";
    }
    if (!empty($correo)) {
        $updates[] = "correoProveedor='$correo'";
    }

    // Verificar si hay algo que actualizar
    if (empty($updates)) {
        // Si no hay nada que actualizar, redirigir con un mensaje de error
        header("location: ../Read/viProveedor.php?error=1");
        exit();
    }

    // Unir todas las actualizaciones en una sola cadena
    $sql .= implode(", ", $updates);
    $sql .= " WHERE documentoProveedor_PK   = $id";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        header("location: ../Read/viProveedor.php");
    } else {
        // Mostrar un mensaje de error genérico
        echo "Error al actualizar el proveedor: " . $conexion->error;
    }
    



}
?>

