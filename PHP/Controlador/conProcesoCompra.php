<?php
/** @SuppressWarnings("php:S4833") */
require_once '../Modelo/Conexion.php'; // NOSONAR

if ($conexion->connect_error) {
    die("<div class='alert alert-danger'>Error de conexión: " . $conexion->connect_error . "</div>");
}

// Registrar Pedido
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnRegistrarPedido'])) {
    $ped_doc = $_POST['DocClie'];
    $ped_fecha = $_POST['fecha'];
    $ped_hora = $_POST['hora'];

    // Verificar si el cliente existe
    $sql_verificar = "SELECT clie_Documento_PK FROM cliente WHERE clie_Documento_PK = ?";
    $stmt_verificar = $conexion->prepare($sql_verificar);
    $stmt_verificar->bind_param("s", $ped_doc);
    $stmt_verificar->execute();
    $stmt_verificar->store_result();
    
    if ($stmt_verificar->num_rows === 0) {
        echo "<div class='alert alert-danger' style='text-align: center;'>
        NO TE ENCUENTRAS REGISTRADO EN EL SISTEMA, POR FAVOR REGÍSTRATE EN LA PARTE SUPERIOR Y HAZ EL PROCESO NUEVAMENTE
      </div>";
        $stmt_verificar->close();
        exit;
    }
    $stmt_verificar->close();

    // Registrar el pedido
    $sql = "INSERT INTO pedido (fechaPedido, horaPedido, clie_Documento_FK) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $ped_fecha, $ped_hora, $ped_doc);
    
    if ($stmt->execute()) {
        $ultimoId = $conexion->insert_id;
        $_SESSION['ultimoIdPedido'] = $ultimoId;
        $_SESSION['pedido_registrado'] = true;
        
        // Mantener los datos del formulario en sesión
        $_SESSION['form_data'] = [
            'DocClie' => $ped_doc,
            'fecha' => $ped_fecha,
            'hora' => $ped_hora
        ];
        
        // Redirigir para evitar reenvío del formulario
        header("Location: procesoCompra.php");
        exit;
    } else {
        echo "<div class='alert alert-danger' style='text-align: center;'>
                ERROR AL REGISTRAR EL PEDIDO
              </div>";
    }
    $stmt->close();
}

// Finalizar Compra (Registrar DetallePedido)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnFinalizarCompra'])) {
    $idPedido = $_POST['idPedido'];
    $metodoPago = $_POST['metodoPago'];
    $carrito = json_decode($_POST['carritoJSON'], true);
    
    // Validar que haya productos en el carrito
    if (empty($carrito)) {
        echo "<div class='alert alert-danger'>No hay productos en el carrito</div>";
        exit;
    }
    
    // Insertar cada producto del carrito en detallepedido
    foreach ($carrito as $producto) {
        $codigoProducto = $producto['codigo'];
        $cantidad = $producto['cantidad'];
        $precioUnitario = $producto['precio'];
        $subtotal = $producto['precio'] * $producto['cantidad'];
        
        $sql = "INSERT INTO detallepedido (
            cantidadProductoPedido,
            precioUnidadProducto,
            subtotalPedidoProducto,
            id_Pedido_FK,
            prod_Codigo_FK,
            metodoPago
        ) VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param(
            "iddiis",
            $cantidad,
            $precioUnitario,
            $subtotal,
            $idPedido,
            $codigoProducto,
            $metodoPago
        );
        
        if (!$stmt->execute()) {
            echo "<div class='alert alert-danger'>Error al registrar el detalle del pedido</div>";
            $stmt->close();
            exit;
        }
        $stmt->close();
    }
    
    // Limpiar la sesión después de finalizar
    unset($_SESSION['carrito']);
    unset($_SESSION['subtotal']);
    unset($_SESSION['ultimoIdPedido']);
    unset($_SESSION['pedido_registrado']);
    unset($_SESSION['form_data']);
    
    // Redirigir a la página de agradecimiento
    header("Location: ../Vista/thankyou.html");
    exit;
}
