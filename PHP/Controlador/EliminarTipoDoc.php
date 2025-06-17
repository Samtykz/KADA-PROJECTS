<?php
/** @SuppressWarnings("php:S4833") */
include_once "../../Modelo/Conexion.php"; // NOSONAR

if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    $sqlDetallePedido = $conexion->query("DELETE FROM detallePedido WHERE id_Pedido_FK IN (SELECT id_Pedido_PK FROM pedido WHERE clie_Documento_FK IN (SELECT clie_Documento_PK FROM cliente WHERE id_TipoDocumento_FK = $id))");
    $sqlPedido = $conexion->query("DELETE FROM pedido WHERE clie_Documento_FK IN (SELECT clie_Documento_PK FROM cliente  WHERE id_TipoDocumento_FK = $id)");
    $sqlCliente = $conexion->query("DELETE FROM cliente WHERE id_TipoDocumento_FK = $id");
    $sqlTipoDocumento = $conexion->query("DELETE FROM tipoDocumento  WHERE id_TipoDocumento_PK = $id");

    if ($sqlTipoDocumento == 1) {
        echo "Tipo De Documento eliminado de forma correcta";
    } else {
        echo "Error al eliminar";
    }
}

// Eliminar ventas relacionadas con el pedido
// Eliminar detalles de pedido relacionados con el pedido
// Eliminar pedidos relacionados con clientes que tienen ese Tipo de documento
// Eliminar clientes que tienen ese Tipo de documento
// Eliminar Tipo de documento
