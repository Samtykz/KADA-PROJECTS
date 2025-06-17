<?php
/** @SuppressWarnings("php:S4833") */
include_once "../../Modelo/Conexion.php"; // NOSONAR

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sqlVenta = $conexion->query("DELETE FROM venta WHERE id_Pedido_FK = $id");
    $sqlDetalle = $conexion->query("DELETE FROM detallePedido WHERE id_Pedido_FK = $id");
    $sqlPedido = $conexion->query("DELETE FROM pedido WHERE id_Pedido_PK = $id");

    if ($sqlPedido == 1) {
        echo "Detalle de Pedido eliminado de forma correcta";
    } else {
        echo "Error al eliminar";
    }
}
