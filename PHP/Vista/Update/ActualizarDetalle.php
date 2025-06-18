<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="../css/tiny-slider.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <title>KADA</title>
</head>
<body style="position: relative; padding-bottom: 10rem; min-height: 100vh;">
  <br><br>
  <?php
    /** @SuppressWarnings("php:S4833") */
    include_once "../../Modelo/Conexion.php"; // NOSONAR
    // Only allow integer IDs from GET variable for security
    $id = isset($_GET["id"]) && ctype_digit($_GET["id"]) ? (int)$_GET["id"] : 0;
    $sql = $conexion->query("SELECT * from detallepedido where id_Pedido_FK = $id");
  ?>
  <section class="h-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-8">
          <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
            <div class="col-xl-10">
              <div class="card-body p-md-8 text-black">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Modificar El Detalle de Pedido</p>
                <form method="POST" id="formActualizarDetallePedido">
                  <input type="hidden" name="id" value="<?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>" readonly>
                  <?php
                  /** @SuppressWarnings("php:S4833") */
                  include_once  "../../Controlador/ActualizarDetallePedido.php"; // NOSONAR
                  ?>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <input type="number" id="idProducto" class="form-control" name="Prod_id" value="<?php echo $detalle["prod_Codigo_FK"];?>" readonly>
                      <label for="idProducto" class="form-label">ID del Producto Pedido</label>
                    </div>
                    <div class="col-md-6 mb-4">
                      <input type="number" id="idProNue" class="form-control" name="idNuevo">
                      <label for="idProNue" class="form-text">Ingresa el ID del Producto Pedido.</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <input type="number" id="cantidadProductoPedido" class="form-control" name="cantidad" value="<?php echo $detalle["cantidadProductoPedido"];?>" readonly>
                      <label for="cantidadProductoPedido" class="form-label">Cantidad Producto Pedido</label>
                    </div>
                    <div class="col-md-6 mb-4">
                      <input type="number" id="CanNueva" class="form-control" name="cantidadNueva">
                      <label for="CanNueva" class="form-text">Ingresa la Cantidad Pedida del Producto.</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <input type="number" id="precioUnidadProducto" class="form-control" name="precioUnidad" value="<?php echo $detalle["precioUnidadProducto"];?>" readonly>
                      <label for="precioUnidadProducto" class="form-label">Precio Por Unidad del Producto.</label>
                    </div>
                    <div class="col-md-6 mb-4">
                      <input type="number" id="preNuevo" class="form-control" name="precioNuevo">
                      <label for="preNuevo" class="form-text">Ingresa el Precio Por Unidad del Producto.</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <input type="text" id="metodoPagoActual" name="metodoP_venta" class="form-control form-control-lg" value="<?php echo $detalle["metodo_pago"]; ?>" readonly>
                      <label for="metodoPagoActual" class="form-label">Método de Pago</label>
                    </div>
                    <div class="col-md-6 mb-4">
                      <input type="text" id="metNuevo" name="metodoP_venta" class="form-control form-control-lg">
                      <label for="metNuevo" class="form-text">Ingresa el nuevo dato</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <input type="number" id="subtotalPedidoProducto" class="form-control" name="subtotal" value="<?php echo $detalle["subtotalPedidoProducto"];?>" readonly>
                      <label for="subtotalPedidoProducto" class="form-label">Subtotal</label>
                    </div>
                    <div class="col-md-6 mb-4">
                      <input type="number" id="subNuevo" class="form-control" name="subNuevo">
                      <label for="subNuevo" class="form-text">Ingresa el Subtotal.</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 ">
                      <input type="number" id="idPedidoActual" class="form-control" name="Ped_id" value="<?php echo $detalle["id_Pedido_FK"];?>" readonly>
                      <label for="idPedidoActual" class="form-label">ID del Pedido</label>
                    </div>
                    <div class="col-md-6 mb-4">
                      <input type="number" id="idPedNuevo" class="form-control" name="idPedidoNuevo">
                      <label for="idPedNuevo" class="form-text">Ingresa el ID del Pedido.</label>
                    </div>
                  </div>
                  <!-- Mensaje de error -->
                  <div id="mensajeError" class="error-message"></div>
                  <br>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <a href="../Read/viDetallePedido.php"><button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Cancelar</button></a>
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg" name="btnActualizar" value="ok">Modificar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br><br>
  <!-- Start Footer Section -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    console.log("El script se esta ejecutando...");
    // Obtener el elemento del mensaje de error
    const mensajeError = document.getElementById("mensajeError");
    // Expresiones regulares para validaciones  
    const regexIdProducto = /^\d{1,10}$/; // Entre 1 y 10 dígitos
    const regexCantidad = /^[1-9]\d*$/; // Números enteros positivos (no cero)
    const regexPrecio = /^\d+(\.\d{1,2})?$/; // Números con hasta 2 decimales
    const regexSubtotal = /^\d+(\.\d{1,2})?$/; // Igual que precio
    const regexIdPedido = /^\d{1,10}$/; // Entre 1 y 10 dígitos
    function validarFormulario(event){
      console.log("Validando formulario...");
      // Obtener los valores de los campos
      const idProNuevo = document.getElementById("idProNue").value.trim();
      const canProPedNuevo = document.getElementById("CanNueva").value.trim();
      const preUnitarioNuevo = document.getElementById("preNuevo").value.trim();
      const metodoNuevo = document.getElementById("metNuevo").value.trim(); 
      const subtoNuevo = document.getElementById("subNuevo").value.trim();
      const idPedidoNuevo = document.getElementById("idPedNuevo").value.trim();
      // Verificar si todos los campos están vacíos
      if (!idProNuevo && !canProPedNuevo && !preUnitarioNuevo && !metodoNuevo && !subtoNuevo && !idPedidoNuevo) {
        mensajeError.textContent = "Todos los campos están vacíos. Debes ingresar al menos un valor para actualizar.";
        mensajeError.style.color = "red";
        mensajeError.style.fontWeight = "bold";
        mensajeError.style.marginTop = "10px";
        mensajeError.style.textAlign = "center";
        event.preventDefault();
        return;
      }
      let errores = [];
      if (idProNuevo && !regexIdProducto.test(idProNuevo)) {
        errores.push("El ID del producto debe tener entre 1 y 10 dígitos.");
      }
      if (canProPedNuevo && !regexCantidad.test(canProPedNuevo)) {
        errores.push("La cantidad debe ser un número entero positivo (mayor que cero).");
      }
      if (preUnitarioNuevo && !regexPrecio.test(preUnitarioNuevo)) {
        errores.push("El precio debe ser un número con hasta 2 decimales (ej: 25.99).");
      }
      if (subtoNuevo && !regexSubtotal.test(subtoNuevo)) {
        errores.push("El subtotal debe ser un número con hasta 2 decimales.");
      }
      if (idPedidoNuevo && !regexIdPedido.test(idPedidoNuevo)) {
        errores.push("El ID del pedido debe tener entre 1 y 10 dígitos.");
      }
      if (errores.length > 0) {
        mensajeError.innerHTML = errores.join("<br>");
        mensajeError.style.color = "red";
        mensajeError.style.fontWeight = "bold";
        mensajeError.style.marginTop = "10px";
        mensajeError.style.textAlign = "center";
        event.preventDefault();
      }
      if (errores.length > 0) {
        return false;
      }
    }
    document.getElementById("formActualizarDetallePedido").addEventListener("submit", validarFormulario);
    const campos = document.querySelectorAll("#formActualizarDetallePedido input[type='text'], #formActualizarDetallePedido input[type='password'], #formActualizarDetallePedido input[type='number']");
    campos.forEach(campo => {
      campo.addEventListener("input", () => {
        mensajeError.textContent = "";
      });
    });
  </script>
</body>
</html>
