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
  <br>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-8">
          <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
            <div class="col-xl-10">
              <div class="card-body p-md-8 text-black">
                <form method="POST" id="formActualizarVenta">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Modificar Venta</p>
                  <?php
                  /** @SuppressWarnings("php:S4833") */
                  include_once  "../../Controlador/ActualizarVenta.php"; // NOSONAR
                  ?>
                  <input type="hidden" name="id" value="<?php echo $venta['vent_codigo_PK']; ?>">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <input type="number" id="totalVentaActual" name="total_venta" class="form-control form-control-lg" value="<?php echo $venta["vent_total"]; ?>" readonly>
                      <label for="totalVentaActual" class="form-label">Total a Pagar</label>
                    </div>
                    <div class="col-md-6 mb-4">
                      <input type="number" id="totNuevo" name="total_venta" class="form-control form-control-lg">
                      <label for="totNuevo" class="form-text">Igresa el valor nuevo</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <input type="number" id="idPedidoActual" class="form-control" name="Ped_id" value="<?php echo $venta["id_Pedido_FK"]; ?>" readonly>
                      <label for="idPedidoActual" class="form-label">ID del Pedido</label>
                    </div>
                    <div class="col-md-6 mb-4">
                      <input type="number" id="idNuevo" class="form-control form-control-lg" name="Ped_id">
                      <label for="idNuevo" class="form-text">Ingresa el ID del Pedido</label>
                    </div>
                  </div>
                  <!-- Mensaje de error -->
                  <div id="mensajeError" class="error-message"></div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <a href="../Read/viVentas.php"><button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Cancelar</button></a>
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg" name="btnActualizar" value="ok">Modificar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <br><br><br><br><br><br>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    console.log("El script se esta ejecutando...");
    // Obtener el elemento del mensaje de error
    const mensajeError = document.getElementById("mensajeError");
    // Expresiones regulares para validaciones
    const regexMetodoPago = /^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ\s]+$/; // Solo texto y espacios
    const regexIdPedido = /^[1-9]\d*$/;
    const regexTotalVenta = /^(?!0\d)\d+(\.\d{1,2})?$/;
    // Función para validar el formulario
    function validarFormulario(event) {
      console.log("Validando formulario...");
      // Obtener los valores de los campos
      const totalNuevo = document.getElementById("totNuevo").value.trim();
      const idPedNuevo = document.getElementById("idNuevo").value.trim();
      // Verificar si todos los campos están vacíos
      if (!totalNuevo && !idPedNuevo) {
        mensajeError.textContent = "Todos los campos están vacíos. Debes ingresar al menos un valor para actualizar.";
        mensajeError.style.color = "red"; // Color del texto
        mensajeError.style.fontWeight = "bold"; // Texto en negrita
        mensajeError.style.marginTop = "10px"; // Espacio superior
        mensajeError.style.textAlign = "center"; // Centrar el texto
        // Evitar que el formulario se envíe
        event.preventDefault();
        return; // Salir de la función
      }
      // Validar cada campo
      let errores = [];
      // Validar total
      if (totalNuevo && !regexTotalVenta.test(totalNuevo)) {
        errores.push("Indique el total es incorrecto.");
      }
      // Validar ID del pedido
      if (idPedNuevo && !regexIdPedido.test(idPedNuevo)) {
        errores.push("El id es incorrecto.");
      }
      // Mostrar errores o enviar el formulario
      if (errores.length > 0) {
        // Configurar el estilo del mensaje de error
        mensajeError.innerHTML = errores.join("<br>"); // Mostrar todos los errores
        mensajeError.style.color = "red"; // Color del texto
        mensajeError.style.fontWeight = "bold"; // Texto en negrita
        mensajeError.style.marginTop = "10px"; // Espacio superior
        mensajeError.style.textAlign = "left"; // Alinear el texto a la izquierda
        // Evitar que el formulario se envíe
        event.preventDefault();
      }
      // Si hay errores, retorna false
      if (errores.length > 0) {
        return false;
      }
    }
    // Agregar el evento de envío del formulario
    document.getElementById("formActualizarVenta").addEventListener("submit", validarFormulario);
    // Agregar eventos de entrada a todos los campos para eliminar el mensaje de error
    const campos = document.querySelectorAll("#formActualizarVenta input[type='text'], #formActualizarVenta input[type='password'], #formActualizarVenta input[type='number']");
    campos.forEach(campo => {
      campo.addEventListener("input", () => {
        // Limpiar el mensaje de error cuando el usuario comience a escribir
        mensajeError.textContent = "";
      });
    });
  </script>
</body>
</html>

