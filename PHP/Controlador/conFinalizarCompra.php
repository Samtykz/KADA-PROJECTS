<?php
session_start();
/** @SuppressWarnings("php:S4833") */
include "../Modelo/Conexion.php"; // NOSONAR

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $idPedido = $_POST['id_pedido'];
    $metodoPago = $_POST['metodo_pago'];
    
    // Obtener carrito de la sesión
    $carrito = $_SESSION['carrito'];
    
    // Insertar detalles del pedido
    foreach ($carrito as $producto) {
        $sql = "INSERT INTO detallePedido (id_pedido, codigo_producto, cantidad, precio_unitario, metodo_pago)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([
            $idPedido,
            $producto['codigo'], // Asegúrate de que cada producto tenga un código
            $producto['nombre'],
            $producto['cantidad'],
            $producto['precio'],
            $metodoPago
        ]);
    }
    
    // Limpiar carrito y redirigir
    unset($_SESSION['carrito']);
    unset($_SESSION['subtotal']);
    unset($_SESSION['id_pedido']);
    
    // Redirigir a la página de agradecimiento
    header("Location: thankyou.html");
    exit();
}
