<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no">
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
    function confirmarDesactivacion(){
      return confirm("¿Estás seguro de desactivar este Administrador? Podrás reactivarlo más tarde.");
    }
    function confirmarReactivacion(){
      return confirm("¿Estás seguro de reactivar este Administrador?");
    }
  </script>

  <!-- Start Header/Navigation -->

  <br><br>
  <h1 style="text-align: center; color: black; font-size: 35px;">GESTIÓN DE ADMINISTRADORES</h1>
  <br>
  <?php
  /** @SuppressWarnings("php:S4833") */
  include_once "../../Controlador/DesactivarAdmin.php"; // NOSONAR
  ?>
  <main class="container" style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
    <table class="table table-hover" style="text-align: center; max-width: 95%;">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Dirección</th>
          <th scope="col">Correo</th>
          <th scope="col">Estado</th>
          <th scope="col"><a href="../Create/RegistroAdmi.php" class="agregate" title="Crear" data-toggle="tooltip">
            <i class="material-icons" style="margin: 5px; color: #52be80;">
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
        $sql = $conexion->query("SELECT * FROM administrador");
        while($datos = $sql->fetch_object()){ ?>
        <tr>
          <td><?=$datos->admi_Codigo_PK?></td>
          <td><?=$datos->admi_nombre?></td>
          <td><?=$datos->admi_apellido?></td>
          <td><?=$datos->admi_telefono?></td>
          <td><?=$datos->admi_direccion?></td>
          <td><?=$datos->admi_correo?></td>
          <td style="color: <?= $datos->estado == 'inactivo' ? 'red' : 'green' ?>;">
                <?= ucfirst($datos->estado) ?>
            </td>
          <td style="display: flex; justify-content: center;">

            <a href="../Update/ActualizarDatosAdmin.php?id=<?= $datos->admi_Codigo_PK?>" class="edit" title="Actualizar Administrador" data-toggle="tooltip"><i class="material-icons" style="margin: 5px; color: #f4d03f;">&#xE254;</i></a>
            <?php if ($datos->estado == 'activo') { ?>
                <a onclick="return confirmarDesactivacion()" href="../Read/viAdministradores.php?id=<?= $datos->admi_Codigo_PK?>&action=desactivar" class="delete" title="Desactivar" data-toggle="tooltip">
                  <i class="material-icons" style="margin: 5px; color: #ec7063;">&#xE872;</i></a>
              <?php } else { ?>
                <a onclick="return confirmarReactivacion()" href="../Read/viAdministradores.php?id=<?= $datos->admi_Codigo_PK?>&action=reactivar" class="reactivate" title="Reactivar" data-toggle="tooltip">
                  <i class="material-icons" style="margin: 5px; color: #52be80;">&#xE5C5;</i></a>
              <?php } ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </main>

  <br><br><br><br><br><br><br>

  <!-- Start Footer Section -->

  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    // Mostrar el mensaje al cargar la página
    document.addEventListener("DOMContentLoaded", function() {
      const mensaje = document.getElementById("mensaje");
      if (mensaje) {
        mensaje.style.display = "block"; // Mostrar el mensaje

        // Ocultar el mensaje al hacer clic en cualquier parte de la pantalla
        document.addEventListener("click", function() {
          mensaje.style.display = "none";
        });

        // Ocultar el mensaje después de 5 segundos (opcional)
        setTimeout(function() {
          mensaje.style.display = "none";
        }, 5000); // 5000 milisegundos = 5 segundos
      }
    });
</script>
</body>
</html>
