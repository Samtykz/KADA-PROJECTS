<?php
include "../../Modelo/Conexion.php";

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
    if ($conexion->query($sql) === TRUE) {
        header("location: ../Read/viVentas.php");
    } else {
        // Mostrar un mensaje de error genérico
        echo "Error al actualizar la venta: " . $conexion->error;
    }
}


/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ped_id = $_POST["id"];
    $nuevo_sub = $_POST["subtotal_venta"];
    $nuevo_por = $_POST["iva_venta"];
    $nuevo_total = $_POST["total_venta"];
    $nuevo_metodo = $_POST["metodoP_venta"];

    $sql = $conexion->query("UPDATE venta SET vent_Subtotal='$nuevo_sub', vent_IVA='$nuevo_por', vent_total='$nuevo_total',
    vent_MetodoPago='$nuevo_metodo', id_Pedido_FK='$ped_id' WHERE vent_codigo_PK=$id_venta");

    if ($sql == 1) {
        header("location:../../Vista/Read/viVentas.php");
    } else {
        echo "Error al actualizar el Detalle de Pedido";
    }
}*/