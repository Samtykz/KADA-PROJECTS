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
  <h1 style="text-align: center; color: black; font-size: 35px;">GESTIÓN DE PEDIDOS</h1>
  <br>
  <?php
  /** @SuppressWarnings("php:S4833") */
  include_once "../../Modelo/Conexion.php";
  include_once "../../Controlador/EliminarPedido.php"; // NOSONAR
  ?>
  <main class="container" style="display: flex; flex-direction: row; justify-content: center;align-items: center;">
    <table class="table table-hover" style="text-align: center; max-width: 95%;">
      <thead>
        <tr>
          <th scope="col">ID Pedido</th>
          <th scope="col">Fecha Pedido</th>
          <th scope="col">Hora Pedido</th>
          <th scope="col">Documento Cliente</th>
          <th scope="col" style="width: 100px;"><a href="../Create/RegistrarPedido.php" class="agregate" title="Crear" data-toggle="tooltip">
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
        include "../../Modelo/Conexion.php"; // NOSONAR
        $sql = $conexion->query("SELECT * FROM pedido");
        while($datos = $sql->fetch_object()){ ?>
          <tr>
            <td><?=$datos->id_Pedido_PK?></td>
            <td><?=$datos->fechaPedido?></td>
            <td><?=$datos->horaPedido?></td>
            <td><?=$datos->clie_Documento_FK?></td>
            <td style="display: flex; flex-direction: row; width: 200px;">
            <a href="../Update/ActualizarPed.php?id=<?=$datos->id_Pedido_PK?>" class="edit" title="Actualizar Pedido" data-toggle="tooltip"><i class="material-icons" style="margin: 5px; color: #f4d03f;">&#xE254;</i></a>
            <a onclick="return eliminar()" href="../Read/ViPedido.php?id=<?= $datos->id_Pedido_PK?>" class="delete" title="Eliminar Pedido" data-toggle="tooltip"><i class="material-icons" style="margin: 5px; color: #ec7063;">&#xE872;</i></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </main>
  <br><br><br><br><br><br><br>

  <!-- Start Footer Section -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
