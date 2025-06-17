<?php
/** @SuppressWarnings("php:S4833") */
include_once "../../Modelo/Conexion.php"; // NOSONAR
if (!empty($_GET["id"]) && !empty($_GET["action"])) {
    $id = $_GET["id"];
    $action = $_GET["action"];

    if ($action == 'desactivar') {
        $sql = $conexion->query("UPDATE administrador SET estado = 'inactivo' WHERE admi_Codigo_PK  = $id");
        if ($sql == 1) {
            echo '<div class="mensaje-exito" id="mensaje">Administrador desactivado correctamente</div>';
        } else {
            echo '<div class="mensaje-error" id="mensaje">Error al desactivar el administrador</div>';
        }
    } elseif ($action == 'reactivar') {
        $sql = $conexion->query("UPDATE administrador SET estado = 'activo' WHERE admi_Codigo_PK  = $id");
        if ($sql == 1) {
            echo '<div class="mensaje-exito" id="mensaje">Administrador reactivado correctamente</div>';
        } else {
            echo '<div class="mensaje-error" id="mensaje">Error al reactivar el administrador</div>';
        }
    }
}
