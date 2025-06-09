<?php
include "../../Modelo/Conexion.php";

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sqlDetalle = $conexion->query("DELETE FROM detallePedido WHERE id_Pedido_FK = $id");
    $sqlVenta = $conexion->query("DELETE FROM venta WHERE id_Pedido_FK = $id");
    $sqlPedido = $conexion->query("DELETE FROM pedido WHERE id_Pedido_PK = $id");

    if ($sqlPedido == 1) {
        echo "Pedido eliminado de forma correcta";
    } else {
        echo "Error al eliminar";
    }
}
/*
1 eliminar detallePedido asociado al pedido
2 eliminar venta asociado al pedido
3 eliminar pedido
*/
?>