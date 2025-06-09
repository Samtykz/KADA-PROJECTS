<?php
include "../../Modelo/Conexion.php";

if (!empty($_GET["id"])) {
    $id = $_GET["id"];


    $sqlProducto = $conexion->query("DELETE FROM producto WHERE documentoProveedor_FK = $id");
    $sqlProveedor = $conexion->query("DELETE FROM proveedor WHERE documentoProveedor_PK = $id");

    if ($sqlProveedor == 1) {
        echo "Proveedor eliminado de forma correcta";
    } else {
        echo "Error al eliminar";
    }
}
?>
