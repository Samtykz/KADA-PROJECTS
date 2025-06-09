<?php
// Incluir conexión a base de datos
require_once '../../Modelo/Conexion.php';
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


    // Insertar datos en base de datos
    $sql = "INSERT INTO detallepedido (cantidadProductoPedido, precioUnidadProducto, subtotalPedidoProducto, metodo_pago, id_Pedido_FK, prod_Codigo_FK)
    VALUES ('$ped_cantidad', '$ped_precioUnidad', '$ped_subTotal', '$ped_Id', '$ped_prodId')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo 'Registro exitoso.';
        header('Location:../../Vista/Read/viDetallePedido.php');
    } else {
        echo 'Error al registrar.';
    }
}
?>