<?php
/** @SuppressWarnings("php:S4833") */
include_once "../../Modelo/Conexion.php"; // NOSONAR

// Obtener el ID del detalle del pedido desde la URL
if (isset($_GET["id"])) {
    $idPedido = $_GET["id"];
    $consulta = "SELECT * FROM detallepedido WHERE id_Pedido_FK = '$idPedido'";
    $resultado = $conexion->query($consulta);
    $detalle = $resultado->fetch_assoc();
}


// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $idProducto = $_POST["idNuevo"];
    $cantidadProducto = $_POST["cantidadNueva"];
    $precioUnidad = $_POST["precioNuevo"];
    $metodo = $_POST["metodo_pago"];
    $subtotal = $_POST["subNuevo"];
    $idPedido = $_POST["idPedidoNuevo"];

    // Construir la consulta SQL dinámicamente
    $sql = "UPDATE detallepedido SET ";
    $updates = array();

    if (!empty($idProducto)) {
        $updates[] = "prod_Codigo_FK ='$idProducto'";
    }
    if (!empty($cantidadProducto)) {
        $updates[] = "cantidadProductoPedido='$cantidadProducto'";
    }
    if (!empty($precioUnidad)) {
        $updates[] = "precioUnidadProducto='$precioUnidad'";
    }
    if (!empty($metodo)) {
        $updates[] = "metodo_pago='$metodo'";
    }
    if (!empty($subtotal)) {
        $updates[] = "subtotalPedidoProducto='$subtotal'";
    }
    if (!empty($idPedido)) {
        $updates[] = "id_Pedido_FK ='$idPedido'";
    }


    // Verificar si hay algo que actualizar
    if (empty($updates)) {
        // Si no hay nada que actualizar, redirigir con un mensaje de error
        header("location: ../Read/viDetallePedido.php?error=1");
        exit();
    }

    // Unir todas las actualizaciones en una sola cadena
    $sql .= implode(", ", $updates);
    $sql .= " WHERE id_Pedido_FK = $id";

    // Ejecutar la consulta
    if ($conexion->query($sql) === true) {
        header("location: ../Read/viDetallePedido.php");
    } else {
        // Mostrar un mensaje de error genérico
        echo "Error al actualizar el detalle del pedido: " . $conexion->error;
    }
}
