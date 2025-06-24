/** @SuppressWarnings("php:S4833") */
<?php
/** @SuppressWarnings("php:S4833") */
require_once '../Modelo/Conexion.php'; // NOSONAR
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registrarClie'])) {

    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $telefono2 = $_POST['telefono2'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $TipoDocumento = $_POST['idTipoDocumento'];
    $contraseña = $_POST['contraseña'];
    $confirmar_contraseña = $_POST['conContraseña'];

    if ($contraseña != $confirmar_contraseña) {
        echo 'Error: Las contraseñas no coinciden.';
        exit;
    }

    $contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

    // Usar prepared statements para evitar inyección SQL
    $stmt = $conexion->prepare(
        "INSERT INTO cliente (clie_Documento_PK, clie_nombre, clie_apellido, clie_Telefono, clie_Telefono2, clie_direccion, clie_correo, id_TipoDocumento_FK, contrasena)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );
    $stmt->bind_param(
        "sssssssss",
        $documento,
        $nombre,
        $apellido,
        $telefono,
        $telefono2,
        $direccion,
        $correo,
        $TipoDocumento,
        $contraseña_encriptada
    );

    if ($stmt->execute()) {
        echo 'Registro exitoso.';
        header('Location: procesoCompra.php');
        exit;
    } else {
        echo 'Error al registrar.';
    }
    $stmt->close();
} // NOSONAR
