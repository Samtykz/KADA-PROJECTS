<?php
/** @SuppressWarnings("php:S4833") */
require_once '../../Modelo/Conexion.php'; // NOSONAR
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnRegistrarProv'])) {
    // Recuperar datos del formulario
    $docpro = $_POST['Documento'];
    $nombrepro = $_POST['Nombre'];
    $telefonopro = $_POST['Telefono'];
    $direccionpro = $_POST['Direccion'];
    $correopro = $_POST['Correo'];
    $tipoDoc = $_POST['idTipoDocumento'];

    // Usar prepared statements para evitar inyección SQL
    $stmt = $conexion->prepare(
        "INSERT INTO proveedor (documentoProveedor_PK, nombreProveedor, telefonoProveedor, direccionProveedor, correoProveedor, id_TipoDocumento_FK)
         VALUES (?, ?, ?, ?, ?, ?)"
    );
    $stmt->bind_param(
        "ssssss",
        $docpro,
        $nombrepro,
        $telefonopro,
        $direccionpro,
        $correopro,
        $tipoDoc
    );

    if ($stmt->execute()) {
        echo 'Registro exitoso.';
        header('Location: ../Read/viProveedor.php');
        exit;
    } else {
        echo 'Error al registrar.';
    }
    $stmt->close();
}


