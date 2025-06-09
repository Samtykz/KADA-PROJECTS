<?php
// Incluir conexión a base de datos
require_once '../../Modelo/Conexion.php';
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Select, para mostrar información en formulario
if (isset($_GET["id"])) {
    $idPedido = $_GET["id"];
    $consulta = "SELECT * FROM detallepedido WHERE id_Pedido_FK = '$idPedido'";
    $resultado = $conexion->query($consulta);
    $pedido = $resultado->fetch_assoc();
}

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['btnRegistrarVenta'])) {
    // Recuperar datos del formulario
    $ve_fecha = $_POST['fecha_venta'];
    $ve_hora = $_POST['hora_venta'];
    $ve_total = $_POST['total_venta'];
    $ve_pedido = $_POST['id_Pedido'];
    $ve_admi = $_POST['admi_codigo'];

    // Validar datos
    if (empty($ve_fecha) || empty($ve_hora) || empty($ve_total) || empty($ve_pedido) || empty($ve_admi)) {
        echo 'Error: Todos los campos son requeridos.';
        exit;
    }


    // Insertar datos en base de datos
    $sql = "INSERT INTO venta (vent_fecha, vent_Hora, vent_total, id_Pedido_FK, admi_Codigo_FK)
    VALUES ('$ve_fecha', '$ve_hora', '$ve_total','$ve_pedido', '$ve_admi')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo 'Registro exitoso.';
        header('Location:../../Vista/Read/viVentas.php');
    } else {
        echo 'Error al registrar.';
    }
}
?>