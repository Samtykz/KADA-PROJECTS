<?php
/** @SuppressWarnings("php:S4833") */
include_once "../../Modelo/Conexion.php"; // NOSONAR

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sqlDetalle = $conexion->query("DELETE FROM detallePedido WHERE prod_Codigo_FK IN (SELECT prod_Codigo_PK FROM producto WHERE id_Categoria_FK = $id)");
    $sqlProducto = $conexion->query("DELETE FROM producto WHERE id_Categoria_FK = $id");
    $sqlCategoria = $conexion->query("DELETE FROM productocategoria WHERE id_Categoria_PK = $id");

    if ($sqlCategoria == 1) {
        echo "Categoria eliminado de forma correcta";
    } else {
        echo "Error al eliminar";
    }
}
