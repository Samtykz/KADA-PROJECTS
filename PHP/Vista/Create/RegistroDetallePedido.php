<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="../css/tiny-slider.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <title>KADA</title>
</head>
<body>
  <br><br>
  <h1 style="font-size: 40px; text-align: center; color: black;">PEDIDO</h1>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-6" style="margin: 0 auto">
        <form method="POST" onsubmit="return validarFormulario()">
          <?php
          /** @SuppressWarnings("php:S4833") */
              include_once "../../Modelo/Conexion.php"; // NOSONAR
              if ($conexion->connect_error) {
                  die("Error de conexión: " . $conexion->connect_error);
              }
              $query = "SELECT * FROM pedido WHERE id_Pedido_PK = (SELECT MAX(id_Pedido_PK) FROM pedido)";
              $result = mysqli_query($conexion, $query);
              
              if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                      // Mostrar el último registro agregado
                      echo "El ID del pedido que acaba de registrar es: " . $row["id_Pedido_PK"] . "";
                  }
              } else {
                  echo "No hay registros en la tabla";
              }
          ?>
          <?php
          /** @SuppressWarnings("php:S4833") */
              include_once "../../Modelo/Conexion.php";
              include_once "../../Controlador/ConRegistroDetallePedido.php"; // NOSONAR
          ?>
          <div class="mb-3">
            <label for="idPro" class="form-labblacel">ID del Producto Pedido</label>
            <input type="number" id="idPro" class="form-control" name="Prod_id">
            <!-- <div class="form-text">Ingresa el ID del Producto Pedido.</div> -->
            <br>
            <span id="errorId" class="text-danger"></span>
          </div>
          <div class="mb-3">
            <label for="can" class="form-labblacel">Cantidad Producto Pedido</label>
            <input type="number" id="can" class="form-control" name="cantidad">
            <!--<div class="form-text">Ingresa la Cantidad Pedida del Producto.</div>-->
            <br>
            <span id="errorCan" class="text-danger"></span>
          </div>
          <div class="mb-3">
            <label for="preUni" class="form-labblacel">Precio unitario</label>
            <input type="number" id="preUni" class="form-control" name="precioUnidad">
            <br>
            <span id="errorPreUni" class="text-danger"></span>
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="metPago">Método de Pago</label>
            <input type="text" id="metPago" name="metodoP_venta" class="form-control form-control-lg" />
            <br>
            <span id="errorMetodo" class="text-danger"></span>
          </div>
          <div class="mb-3">
            <label for="subt" class="form-labblacel">Subtotal</label>
            <input type="number" id="subt" class="form-control" name="subtotal">
            <br>
            <span id="errorSub" class=" text-danger"></span>
          </div>
          <div class="mb-3">
            <label for="idPed" class="form-labblacel">ID del Pedido</label>
            <input type="number" id="idPed" class="form-control" name="Ped_id">
            <br>
            <span id="errorIdPed" class="text-danger"></span>
          </div>
          <br>
          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"><a href="../Read/viDetallePedido.php" style="text-decoration: none; color:#f5eef8">Cancelar</a></button>
          <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" value="Registrar" name="btnRegistrarDetallePedido" style="background-color: #9b59b6; border: none;">
        </form>
      </div>    
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br> 
    
<!-- Start Footer Section -->
<script src="js/bootstrap.bundle.min.js"></script>
<script>
    function validarFormulario(){
        // Obtener los valores de los campos
        const idProducto = document.getElementById('idPro').value.trim();
        const cantidad = document.getElementById('can').value.trim();
        const precioUni = document.getElementById('preUni').value.trim();
        const subto = document.getElementById('subt').value.trim();
        const idPedido = document.getElementById('idPed').value.trim();
        const metodoPa = document.getElementById('metPago').value.trim();
        // Validar el  ID del producto
        if (idProducto ==="") {
            document.getElementById('errorId').innerText = "El Id del producto es obligatorio";
            return false;
        }
        // Validar la cantidad del producto
        if (cantidad ==="") {
            document.getElementById('errorCan').innerText ="La cantidad del producto es obligatoria";
            return false;
        }
        // Validar el precio unitario del producto
        if (precioUni ==="") {
            document.getElementById('errorPreUni').innerText ="El precio es obligatorio";
            return false;
        }
        // Validar metodo de pago 
            if (metodoPa ==="") {
                document.getElementById('errorMetodo').innerText ="El metodo de pago es obligatorio";
                return false;
            }
        // Validar el subtotal
        if (subto ==="") {
            document.getElementById('errorSub').innerText ="El subtotal es obligatorio";
            return false;
        }
        // Validar el ID del pedido
        if (idPedido ==="") {
            document.getElementById('errorIdPed').innerText ="El Id del pedido es obligatorio";
            return false;
        }
        // Si todas las validaciones pasan, el formulario se envia
        return true;
    }
    // Función para limpiar mensajes de error al escribir en los campos
    function limpiarError(campoId, errorId) {
        document.getElementById(campoId).addEventListener('input', function () {
          document.getElementById(errorId).innerText = ""; // Limpiar el mensaje de error
        });
    }
      // Limpiar errores al escribir en cada campo
        limpiarError('idPro', 'errorId');
        limpiarError('can', 'errorCan');
        limpiarError('preUni', 'errorPreUni');
        limpiarError('metPago', 'errorMetodo');
        limpiarError('subt', 'errorSub');
        limpiarError('idPed', 'errorIdPed');
</script>
</body>
</html>
