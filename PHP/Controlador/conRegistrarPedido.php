<?php
include "../../Modelo/Conexion.php";

if (isset($_POST['btnRegistrarPedido'])) {
    $documento = $_POST['DocClie'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    
    // Verificar si el cliente existe
    $sqlVerificar = "SELECT * FROM cliente WHERE clie_Documento_PK = ?";
    $stmtVerificar = $conexion->prepare($sqlVerificar);
    $stmtVerificar->bind_param("s", $documento);
    $stmtVerificar->execute();
    $resultado = $stmtVerificar->get_result();
    
    if ($resultado->num_rows == 0) {
        // Cliente no existe, redirigir a registro
        header("Location: registro.php?documento=".$documento);
        exit();
    }
    
    // Insertar el pedido
    $sql = "INSERT INTO pedido (fechaPedido, horaPedido, clie_Documento_FK) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $fecha, $hora, $documento);
    
    if ($stmt->execute()) {
        // Obtener el ID del pedido recién insertado
        $idPedido = $conexion->insert_id;
        $_SESSION['id_pedido'] = $idPedido;
        
        // Recargar la página para mostrar el ID del pedido
        header("Location: procesocompra.php");
        exit();
    } else {
        echo "Error al registrar el pedido: " . $conexion->error;
    }
}
?>