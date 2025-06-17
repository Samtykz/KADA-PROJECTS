<?php
/** @SuppressWarnings("php:S4833") */
include_once "../../Modelo/Conexion.php"; // NOSONAR
if (!empty($_GET["id"]) && !empty($_GET["action"])) {
    $id = $_GET["id"];
    $action = $_GET["action"];

    if ($action == 'desactivar') {
        $sql = $conexion->query("UPDATE cliente SET estado = 'inactivo' WHERE clie_Documento_PK = $id");
        if ($sql == 1) {
            echo '<div class="mensaje-exito" id="mensaje">Cliente desactivado correctamente</div>';
        } else {
            echo '<div class="mensaje-error" id="mensaje">Error al desactivar el cliente</div>';
        }
    } elseif ($action == 'reactivar') {
        $sql = $conexion->query("UPDATE cliente SET estado = 'activo' WHERE clie_Documento_PK = $id");
        if ($sql == 1) {
            echo '<div class="mensaje-exito" id="mensaje">Cliente reactivado correctamente</div>';
        } else {
            echo '<div class="mensaje-error" id="mensaje">Error al reactivar el cliente</div>';
        }
    }
}

