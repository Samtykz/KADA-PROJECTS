<?php
// Incluir conexión a base de datos
require_once '../../Modelo/Conexion.php';

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


    /*if (empty($docpro) || empty($nombrepro) || empty($telefonopro) || empty($direccionpro) || empty($correopro) || empty($tipoDoc)) {
            
        echo 'Error: Todos los campos son requeridos.';
        exit;
    }*/

    // Insertar datos en la base de datos
    $sql = "INSERT INTO proveedor (documentoProveedor_PK, nombreProveedor, telefonoProveedor, direccionProveedor, correoProveedor, id_TipoDocumento_FK)
            VALUES ('$docpro', '$nombrepro', '$telefonopro', '$direccionpro', '$correopro', '$tipoDoc')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo 'Registro exitoso.';
        header('Location: ../Read/viProveedor.php');
        exit;
    } else {
        echo 'Error al registrar.';
    }
}
?>
