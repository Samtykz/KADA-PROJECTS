<?php 
include "../../Modelo/Conexion.php";

// Obtener el ID del administrador desde la URL
if (isset($_GET["id"])) {
  $idProducto = $_GET["id"];
  $consulta = "SELECT * FROM producto WHERE prod_Codigo_PK  = '$idProducto'";
  $resultado = $conexion->query($consulta);
  $producto = $resultado->fetch_assoc();
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $nombre = $_POST["nombreNuevo"];
  $precio = $_POST["precioNuevo"];
  $talla = $_POST["tallaNueva"];
  $stock = $_POST["stockNuevo"];
  $material = $_POST["materialNuevo"];
  $descripcion = $_POST["descripcionNueva"];
  $proveedor = $_POST["proveedorNuevo"];

  // Construir la consulta SQL dinámicamente
  $sql = "UPDATE producto SET ";
  $updates = array();

  if (!empty($nombre)) {
      $updates[] = "prod_Nombre='$nombre'";
  }
  if (!empty($precio)) {
      $updates[] = "prod_PrecioVenta='$precio'";
  }
  if (!empty($talla)) {
      $updates[] = "prod_UnidadMedida='$talla'";
  }
  if (!empty($stock)) {
      $updates[] = "prod_Stock='$stock'";
  }
  if (!empty($material)) {
      $updates[] = "prod_Material='$material'";
  }
  if (!empty($descripcion)) {
      $updates[] = "prod_Descripcion='$descripcion'";
  }
  if (!empty($proveedor)) {
      $updates[] = "documentoProveedor_FK  ='$proveedor'";
  }

  // Verificar si hay algo que actualizar
  if (empty($updates)) {
      // Si no hay nada que actualizar, redirigir con un mensaje de error
      header("location: ../Read/productos.php?error=1");
      exit();
  }

  // Unir todas las actualizaciones en una sola cadena
  $sql .= implode(", ", $updates);
  $sql .= " WHERE prod_Codigo_PK  = $id";

  // Ejecutar la consulta
  if ($conexion->query($sql) === TRUE) {
      header("location: ../Read/productos.php");
  } else {
      // Mostrar un mensaje de error genérico
      echo "Error al actualizar el producto: " . $conexion->error;
  }
}



?>