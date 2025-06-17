<?php
/** @SuppressWarnings("php:S4833") */
include_once "../../Modelo/Conexion.php"; // NOSONAR

// Obtener el ID de la categoria desde la URL
if (isset($_GET["id"])) {
    $idcategoria = $_GET["id"];
    $consulta = "SELECT * FROM productocategoria WHERE id_Categoria_PK  = '$idcategoria'";
    $resultado = $conexion->query($consulta);
    $categoria = $resultado->fetch_assoc();
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombreNuevo"];
   

    // Construir la consulta SQL dinámicamente
    $sql = "UPDATE productocategoria SET ";
    $updates = array();

    if (!empty($nombre)) {
        $updates[] = "nombreCategoria='$nombre'";
    }
    

    // Verificar si hay algo que actualizar
    if (empty($updates)) {
        // Si no hay nada que actualizar, redirigir con un mensaje de error
        header("location: ../Read/categorias.php?error=1");
        exit();
    }

    // Unir todas las actualizaciones en una sola cadena
    $sql .= implode(", ", $updates);
    $sql .= " WHERE id_Categoria_PK= $id";

    // Ejecutar la consulta
    if ($conexion->query($sql) === true) {
        header("location: ../Read/categorias.php");
    } else {
        // Mostrar un mensaje de error genérico
        echo "Error al actualizar la categoria: " . $conexion->error;
    }
    
}


