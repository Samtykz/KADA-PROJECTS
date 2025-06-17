<?php
/** @SuppressWarnings("php:S4833") */
include "../../Modelo/Conexion.php"; // NOSONAR

if (isset($_GET["id"])) {
    $venta = $_GET["id"];
    $consulta = "SELECT * FROM venta WHERE vent_codigo_PK = '$venta'";
    $resultado = $conexion->query($consulta);
    $venta = $resultado->fetch_assoc();
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $total = $_POST["total_venta"];
    
    $idpedido = $_POST["Ped_id"];


    // Construir la consulta SQL dinámicamente
    $sql = "UPDATE venta SET ";
    $updates = array();

    if (!empty($total)) {
        $updates[] = "vent_total='$total'";
    }

    if (!empty($idpedido)) {
        $updates[] = "id_Pedido_FK ='$idpedido'";
    }


    // Verificar si hay algo que actualizar
    if (empty($updates)) {
        // Si no hay nada que actualizar, redirigir con un mensaje de error
        header("location: ../Read/viVentas.php?error=1");
        exit();
    }

    // Unir todas las actualizaciones en una sola cadena
    $sql .= implode(", ", $updates);
    $sql .= " WHERE vent_codigo_PK = $id";

    // Ejecutar la consulta
    if ($conexion->query($sql) === true) {
        header("location: ../Read/viVentas.php");
    } else {
        // Mostrar un mensaje de error genérico
        echo "Error al actualizar la venta: " . $conexion->error;
    }
}
