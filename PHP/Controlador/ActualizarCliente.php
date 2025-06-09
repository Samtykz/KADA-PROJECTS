<?php
include "../../Modelo/Conexion.php";


// Obtener el ID del cliente desde la URL
if (isset($_GET["id"])) {
    $idCliente = $_GET["id"];
    $consulta = "SELECT * FROM cliente WHERE clie_Documento_PK = '$idCliente'";
    $resultado = $conexion->query($consulta);
    $cliente = $resultado->fetch_assoc();
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombreNuevo"];
    $apellido = $_POST["apellidoNuevo"];
    $telefono = $_POST["telefonoNuevo"];
    $telefono2 = $_POST["telefono2Nuevo"];
    $direccion = $_POST["direccionNueva"];
    $correo = $_POST["correoNuevo"];
    $documento = $_POST["tipoDocumentoNuevo"];
    $contraseña = $_POST["contraseñaNueva"];

    // Construir la consulta SQL dinámicamente
    $sql = "UPDATE cliente SET ";
    $updates = array();

    if (!empty($nombre)) {
        $updates[] = "clie_nombre='$nombre'";
    }
    if (!empty($apellido)) {
        $updates[] = "clie_apellido='$apellido'";
    }
    if (!empty($telefono)) {
        $updates[] = "clie_Telefono='$telefono'";
    }
    if (!empty($telefono2)) {
        $updates[] = "clie_Telefono2='$telefono2'";
    }
    if (!empty($direccion)) {
        $updates[] = "clie_direccion='$direccion'";
    }
    if (!empty($correo)) {
        $updates[] = "clie_correo='$correo'";
    }
    if (!empty($documento)) {
        $updates[] = "id_TipoDocumento_FK ='$documento'";
    }
    if (!empty($contraseña)) {
        $updates[] = "contrasena='$contraseña'";
    }

    // Verificar si hay algo que actualizar
    if (empty($updates)) {
        // Si no hay nada que actualizar, redirigir con un mensaje de error
        header("location: ../Read/viClientes.php?error=1");
        exit();
    }

    // Unir todas las actualizaciones en una sola cadena    
    $sql .= implode(", ", $updates);
    $sql .= " WHERE clie_Documento_PK = $id";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        header("location: ../Read/viClientes.php");
    } else {
        // Mostrar un mensaje de error genérico
        echo "Error al actualizar el cliente: " . $conexion->error;
    }
}
?>