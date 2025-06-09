<?php
include "../../Modelo/Conexion.php";


// Obtener el ID del administrador desde la URL
if (isset($_GET["id"])) {
    $idAdministrador = $_GET["id"];
    $consulta = "SELECT * FROM Administrador WHERE admi_Codigo_PK = '$idAdministrador'";
    $resultado = $conexion->query($consulta);
    $Admin = $resultado->fetch_assoc();
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"]; 
    $nombre = $_POST["nombreNuevo"];
    $apellido = $_POST["apellidoNuevo"];
    $telefono = $_POST["telefonoNuevo"];
    $direccion = $_POST["direccionNueva"];
    $correo = $_POST["correoNuevo"];


    // Construir la consulta SQL dinámicamente
    $sql = "UPDATE Administrador SET ";
    $updates = array();

    if (!empty($nombre)) {
        $updates[] = "admi_nombre='$nombre'";
    }
    if (!empty($apellido)) {
        $updates[] = "admi_apellido='$apellido'";
    }
    if (!empty($telefono)) {
        $updates[] = "admi_telefono='$telefono'";
    }
    if (!empty($direccion)) {
        $updates[] = "admi_direccion='$direccion'";
    }
    if (!empty($correo)) {
        $updates[] = "admi_correo='$correo'";
    }


    // Verificar si hay algo que actualizar
    if (empty($updates)) {
        // Si no hay nada que actualizar, redirigir con un mensaje de error
        header("location: ../Read/viAdministradores.php?error=1");
        exit();
    }

    // Unir todas las actualizaciones en una sola cadena
    $sql .= implode(", ", $updates);
    $sql .= " WHERE admi_Codigo_PK = $id";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        header("location: ../Read/viAdministradores.php");
    } else {
        // Mostrar un mensaje de error genérico
        echo "Error al actualizar el administrador: " . $conexion->error;
    }
}
?>