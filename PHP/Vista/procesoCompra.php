<?php
session_start();
// Inicializar variables de sesión si no existen
if (!isset($_SESSION['pedido_registrado'])) {
    $_SESSION['pedido_registrado'] = false;
}
// Resetear estado del pedido si viene del carrito
if (isset($_POST['carrito'])) {
    $_SESSION['pedido_registrado'] = false;
}
// Verificar si el pedido ya fue registrado
$pedidoRegistrado = $_SESSION['pedido_registrado'];
// Recuperar datos del carrito
$carrito = [];
$subtotal = 0;
$total = 0;
if (isset($_POST['carrito'])) {
    $carrito = json_decode($_POST['carrito'], true);
    $subtotal = isset($_POST['subtotal']) ? floatval($_POST['subtotal']) : 0;
    $total = $subtotal;
    $_SESSION['carrito'] = $carrito;
    $_SESSION['subtotal'] = $subtotal;
} elseif (isset($_SESSION['carrito'])) {
    $carrito = $_SESSION['carrito'];
    $subtotal = $_SESSION['subtotal'];
    $total = $subtotal;
}
// Obtener códigos de productos
$codigosProductos = '';
if (!empty($carrito)) {
    $codigos = array_column($carrito, 'codigo');
    $codigosProductos = implode(', ', $codigos);
}
// Verificar ID de pedido
$ultimoIdPedido = isset($_SESSION['ultimoIdPedido']) ? $_SESSION['ultimoIdPedido'] : '';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="images/favicon.png">
  <meta name="description" content="">
  <meta name="keywords" content="bootstrap, bootstrap4">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
  <title>Proceso de Compra</title>
</head>
<body>
  <!-- Hero Section -->
  <div class="hero">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-5">
          <div class="intro-excerpt">
            <h1>Proceso de Compra</h1>
            <p class="mb-4">Gracias por visitarnos. Para garantizar una experiencia segura y organizada, hemos diseñado un proceso sencillo de compra. Abajo te lo explicamos paso a paso.</p>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="hero-img-wrap text-center">
            <img src="images/LKADA.png" class="img-fluid" alt="Logo Kada">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="untree_co-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <div class="alert border p-4 rounded text-center" style="background-color: #ebdef0;">
            <p style="color: black; font-size: medium; margin: auto;">Antes de realizar un pedido, debes estar registrado. Si no tienes una cuenta <a href="Registrate.php">Click aquí</a> para registrarte.</p>
          </div>
        </div>
      </div>
      <!-- Formulario de Pedido -->
      <?php if (!$pedidoRegistrado): ?>
      <!-- Formulario de Pedido (solo visible si el pedido no está registrado) -->
      <div class="row mb-5">
        <div class="col-md-12">
          <h2 class="h3 mb-3 text-black text-center">Pedido</h2>
          <div class="p-3 p-lg-5 border bg-white">
            <form class="row g-3" method="POST" onsubmit="return validarFormulario()">
              <?php
              /** @SuppressWarnings("php:S4833") */
                include_once "../Modelo/Conexion.php";
                include_once "../Controlador/conProcesoCompra.php"; // NOSONAR
              ?>
              <div class="col-md-4">
                <label for="exampleInputEmail1" class="form-labblacel">Documento del Cliente</label>
                <input type="number" id="numDocClie" class="form-control" name="DocClie" >
                <span id="errorDocClie" class="text-danger"></span>
              </div>
              <div class="col-md-4">
                <label for="inputDate">Fecha del Pedido</label>
                <input type="date" class="form-control" id="inputDate" name="fecha" />
                <span id="errorFecha" class="text-danger"></span>
              </div>
              <div class="col-md-4">
                <label for="inputHour">Hora del Pedido</label>
                <input type="time" class="form-control" id="inputHour" name="hora" />
                <span id="errorHora" class="text-danger"></span>
              </div>
              <div class="col-12 d-grid mt-4">
                <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg" value="Confirmar Pedido" name="btnRegistrarPedido" style="border: none;">
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php else: ?>
      <!-- Mostrar mensaje de éxito y continuar con el proceso -->
      <div class="row mb-5">
        <div class="col-md-12">
          <div class="alert alert-success border p-4 rounded text-center">
            <p style="color: black; font-size: medium; margin: auto;">Pedido registrado correctamente. Por favor completa los siguientes datos para finalizar tu compra.</p>
          </div>
        </div>
      </div>
      <!-- Detalle del Pedido y Orden (solo visible después de registrar el pedido) -->
      <div class="row">
        <!-- Detalle -->
        <div class="col-md-6 mb-5">
          <h2 class="text-black">Completa los campos</h2>
          <div class="p-3 p-lg-5 border bg-white">
            <form method="POST" action="../Controlador/conProcesoCompra.php">
              <div class="mb-3">
                <label for="metodoPago" class="form-label">Método de pago</label>
                <select id="metodoPago" class="form-control" name="metodoPago" required>
                  <option value="">Selecciona un método de pago</option>
                  <option value="Visa">Visa</option>
                  <option value="Nequi">Nequi</option>
                  <option value="Bancolombia">Bancolombia</option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="idPedido" class="form-label">ID Pedido</label>
                  <input type="text" class="form-control" id="idPedido" name="idPedido"
                        value="<?php echo $ultimoIdPedido; ?>" readonly>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="codigoProductos" class="form-label">Código de Productos</label>
                  <input type="text" class="form-control" id="codigoProductos"
                        value="<?php echo $codigosProductos; ?>" readonly>
                </div>
              </div>
              
              <!-- Campo oculto para enviar el carrito -->
              <input type="hidden" name="carritoJSON" value="<?php echo htmlspecialchars(json_encode($carrito)); ?>">
              
              <div class="col-12 d-grid mt-4">
                <button type="submit" class="btn btn-secondary btn-lg" name="btnFinalizarCompra">Finalizar Compra</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="h3 mb-3 text-black">Detalle</h2>
          <div class="p-3 p-lg-5 border bg-white">
            <table class="table mb-4">
              <thead>
                <tr>
                  <th>Producto</th>
                  <th>Cantidad</th>
                  <th>Precio Unitario</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($carrito as $producto): ?>
                <tr>
                  <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                  <td><?php echo $producto['cantidad']; ?></td>
                  <td>$<?php echo number_format($producto['precio'], 2); ?></td>
                  <td>$<?php echo number_format($producto['precio'] * $producto['cantidad'], 2); ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                  <td colspan="3" class="text-end"><strong>Total</strong></td>
                  <td>$<?php echo number_format($total, 2); ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <!-- Scripts -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function validarFormulario(){
      // Obtener  los valores de los campos
      const numDoc = document.getElementById('numDocClie').value.trim();
      const fechaPed = document.getElementById('inputDate').value;
      const horPed = document.getElementById('inputHour').value;
      // Formatos para los campos
      const regexDocumento =/^\d{6,10}$/; // Formato para el campo del numero de documento
      // validar el numero de docuemto del cliente
      if (numDoc ==="") {
        document.getElementById('errorDocClie').innerText ="El numero de documento del cliente es obligatorio";
        return false;
      }else if (!regexDocumento.test(numDoc)) {
        document.getElementById('errorDocClie').innerText ="Formato no valido para el documento";
        return false;
      }
      // Validar la fecha del pedido
      if (fechaPed ==="") {
        document.getElementById('errorFecha').innerText ="La fecha del pedido es obligatoria";
        return false;
      }
      // Validar la hora del pedido
      if (horPed ==="") {
        document.getElementById('errorHora').innerText ="La hora del pedido es obligatoria";
        return false;
      }
      // Si las validaciones pasan, el formulario se envia
      return true;
    }
    // Funcion para limpiar losmensajes de error
    function limpiarError(campoId, errorId){
      document.getElementById(campoId).addEventListener('input', function () {
        document.getElementById(errorId).innerText ="";
      });
    }
    // Limpiar errores al momento de escribir
    limpiarError('numDocClie', 'errorDocClie');
    limpiarError('inputDate', 'errorFecha');
    limpiarError('inputHour', 'errorHora');
  </script>
  <form id="formulario-compra" action="procesoCompra.php" method="POST" style="display: none;">
    <input type="text" name="carritoJSON" id="carritoJSON">
  </form>
</body>
</html>