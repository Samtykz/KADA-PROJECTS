<?php 
include "../../Modelo/Conexion.php";

if (isset($_GET["id"])) {
    $idtipodocumento = $_GET["id"];
    $consulta = "SELECT * FROM tipoDocumento WHERE id_TipoDocumento_PK = '$idtipodocumento'";
    $resultado = $conexion->query($consulta);
    $tipodocumento = $resultado->fetch_assoc();
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombreNuevo"];
   

    // Construir la consulta SQL dinámicamente
    $sql = "UPDATE tipoDocumento SET ";
    $updates = array();

    if (!empty($nombre)) {
        $updates[] = "nombreDocumento='$nombre'";
    }
    

    // Verificar si hay algo que actualizar
    if (empty($updates)) {
        // Si no hay nada que actualizar, redirigir con un mensaje de error
        header("location: ../Read/viTipoDocumento.php?error=1");
        exit();
    }

    // Unir todas las actualizaciones en una sola cadena
    $sql .= implode(", ", $updates);
    $sql .= " WHERE id_TipoDocumento_PK = $id";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        header("location: ../Read/viTipoDocumento.php");
    } else {
        // Mostrar un mensaje de error genérico
        echo "Error al actualizar el tipo de documento: " . $conexion->error;
    }
    
}

?>