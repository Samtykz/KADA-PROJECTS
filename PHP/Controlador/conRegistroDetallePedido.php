<?php
/** @SuppressWarnings("php:S4833") */
require_once '../../Modelo/Conexion.php'; // NOSONAR
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['btnRegistrarDetallePedido'])) {
    // Recuperar datos del formulario
    $ped_cantidad = $_POST['cantidad'];
    $ped_precioUnidad = $_POST['precioUnidad'];
    $metpago = $_POST['metodoP_venta'];
    $ped_subTotal = $_POST['subtotal'];
    $ped_prodId = $_POST['Prod_id'];
    $ped_Id = $_POST['Ped_id'];

    // Usar prepared statements para evitar inyección SQL
    $stmt = $conexion->prepare(
        "INSERT INTO detallepedido (cantidadProductoPedido, precioUnidadProducto, subtotalPedidoProducto, metodo_pago, id_Pedido_FK, prod_Codigo_FK)
        VALUES (?, ?, ?, ?, ?, ?)"
    );
    $stmt->bind_param(
        "iddsii",
        $ped_cantidad,
        $ped_precioUnidad,
        $ped_subTotal,
        $metpago,
        $ped_Id,
        $ped_prodId
    );

    if ($stmt->execute()) {
        echo 'Registro exitoso.';
        header('Location:../../Vista/Read/viDetallePedido.php');
        exit;
    } else {
        echo 'Error al registrar.';
    }
    $stmt->close();
}

