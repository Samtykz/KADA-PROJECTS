<?php
/** @SuppressWarnings("php:S4833") */
require_once '../../Modelo/Conexion.php'; // NOSONAR
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['registrarTD'])) {
    $nombre = $_POST['nombreDocumento'];
    if (empty($nombre)) {
        echo 'Error: Todos los campos son requeridos.';
        exit;
    }

    // Usar prepared statements para evitar inyección SQL
    $stmt = $conexion->prepare(
        "INSERT INTO tipoDocumento (nombreDocumento) VALUES (?)"
    );
    $stmt->bind_param("s", $nombre);

    if ($stmt->execute()) {
        echo 'Registro exitoso.';
        header('Location: ../Read/viTipoDocumento.php');
        exit;
    } else {
        echo 'Error al registrar.';
    }
    $stmt->close();
}

