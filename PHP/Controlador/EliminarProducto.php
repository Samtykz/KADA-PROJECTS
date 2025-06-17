<?php
/** @SuppressWarnings("php:S4833") */
include_once "../../Modelo/Conexion.php"; // NOSONAR

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sqlDetalle = $conexion->query("DELETE FROM detallePedido WHERE prod_Codigo_FK = $id");
    $sqlProducto = $conexion->query("DELETE FROM producto WHERE prod_Codigo_PK = $id");

    if ($sqlProducto == 1) {
        echo "Producto eliminado de forma correcta";
    } else {
        echo "Error al eliminar";
    }
}
