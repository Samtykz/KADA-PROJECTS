<?php
/** @SuppressWarnings("php:S4833") */
include  "../../Modelo/Conexion.php"; // NOSONAR

// Obtener el ID del pedida desde la URL
if (isset($_GET["id"])) {
    $idPedido = $_GET["id"];
    $consulta = "SELECT * FROM pedido WHERE id_Pedido_PK  = '$idPedido'";
    $resultado = $conexion->query($consulta);
    $pedido = $resultado->fetch_assoc();
}



// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $documento = $_POST["docNueClie"];
  

  // Construir la consulta SQL dinámicamente
  $sql = "UPDATE pedido SET ";
  $updates = array();

  if (!empty($documento)) {
      $updates[] = "clie_Documento_FK ='$documento'";
  }
  

  // Verificar si hay algo que actualizar
  if (empty($updates)) {
      // Si no hay nada que actualizar, redirigir con un mensaje de error
      header("location: ../Read/viPedido.php?error=1");
      exit();
  }

  // Unir todas las actualizaciones en una sola cadena 
  $sql .= implode(", ", $updates);
  $sql .= " WHERE id_Pedido_PK = $id";

  // Ejecutar la consulta
  if ($conexion->query($sql) === true) {
      header("location: ../Read/viPedido.php");
  } else {
      // Mostrar un mensaje de error genérico
      echo "Error al actualizar el pedido: " . $conexion->error;
  }
}
