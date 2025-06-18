<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="../css/tiny-slider.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <title>KADA</title>
</head>
<body style="position: relative; padding-bottom: 3rem; min-height: 100vh;">
  <script>
    function eliminar(){
      var respuesta=confirm("¿Estás seguro? Al eliminar este registro ya no podrás recuperarlo.");
      return respuesta
    }
  </script>
  <br><br>
  <h1 style="text-align: center; color: black; font-size: 35px;">DETALLE DE PEDIDO</h1>
  <br>
  <?php
  /** @SuppressWarnings("php:S4833") */
  include_once "../../Modelo/Conexion.php";
  include_once "../../Controlador/EliminarDetallePedido.php"; // NOSONAR
  ?>
  <main class="container" style="display: flex; flex-direction: row; justify-content: center;align-items: center;">
    <table class="table table-hover" style="text-align: center; max-width: 95%;">
      <thead>
        <tr>
          <th scope="col">Cantidad </th>
          <th scope="col">Precio Unitario </th>
          <th scope="col">Subtotal</th>
          <th scope="col">N° Pedido</th>
          <th scope="col">Codigo del Producto</th>
          <th scope="col" style="width: 100px"><a href="../Create/RegistroDetallePedido.php" class="agregate" title="Crear" data-toggle="tooltip">
            <i class="material-icons" style="margin: 5px; color: #ec7063;">
              <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#52be80">
                <path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
              </svg>
            </i></a></th>
        </tr>
      </thead>
      <tbody>
        <?php
        /** @SuppressWarnings("php:S4833") */
        include_once "../../Modelo/Conexion.php"; // NOSONAR
        $sql = $conexion->query("SELECT * FROM detallepedido");
        while($datos = $sql->fetch_object()){ ?>
          <tr>
            <td><?=$datos->cantidadProductoPedido?></td>
            <td><?=$datos->precioUnidadProducto?></td>
            <td><?=$datos->subtotalPedidoProducto?></td>
            <td><?=$datos->id_Pedido_FK?></td>
            <td><?=$datos->prod_Codigo_FK?></td>
            <td style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
              <a href="../Create/RegistroVenta.php?id=<?= $datos->id_Pedido_FK?>" class="agregate" title="Aprobar" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" style="color:#58d68d; margin: 5px;"  stclass="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg></a>
              <a href="../Update/ActualizarDetalle.php?id=<?=$datos->id_Pedido_FK?>" class="edit" title="Actualizar Detalle" data-toggle="tooltip"><i class="material-icons" style="margin: 5px; color: #f4d03f;">&#xE254;</i></a>
              <a onclick="return eliminar()" href="../Read/ViDetallePedido.php?id=<?= $datos->id_Pedido_FK?>" class="agregate" title="Desaprobar" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" style="margin: 5px; color: #e74c3c;" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
              </svg></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </main>
  <br><br><br><br><br><br><br>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
