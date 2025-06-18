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
    $sql = $conexion->query("SELECT * from pedido where id_Pedido_PK = $id");
  ?>
  <section class="h-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-8">
          <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
            <div class="col-xl-10">
              <div class="card-body p-md-8 text-black">
                <form id="formActualizarPedido" method="POST">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Modificar Pedido</p>
                  <input type="hidden" name="id" value="<?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>">
                  <?php
                  /** @SuppressWarnings("php:S4833") */
                  include_once "../../Controlador/ActualizarPedido.php"; // NOSONAR
                  ?>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="number" id="docClie" class="form-control" name="docClie" value="<?php echo $pedido["clie_Documento_FK"]; ?>" readonly>
                        <label for="docClie" class="form-label">Documento del Cliente</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="number" id="nuDoc" class="form-control" name="docNueClie">
                        <label for="nuDoc" class="form-text">Ingresa el nuevo documento del Cliente</label>
                      </div>
                    </div>
                  </div>
                  <!-- Mensaje de error -->
                  <div id="mensajeError" class="error-message"></div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <a href="../Read/viPedido.php"><button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Cancelar</button></a>
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
  <br><br><br><br><br>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    console.log("El script se esta ejecutando...");
    // Obtener el elemento del mensaje de error
    const mensajeError = document.getElementById("mensajeError");
    // Expresiones regulares para validaciones
    const regexDocumento = /^\d{10}$/; // Exactamente 10 dígitos
    function validarFormulario(event){
      console.log("Validando formulario...");
      // Obtener los valores de los campos
      const docNuevo = document.getElementById("nuDoc").value.trim();
      // Verificar si todos los campos están vacíos
      if (!docNuevo) {
        mensajeError.textContent = "El campo está vacío. Debes ingresar el valor para actualizar.";
        mensajeError.style.color = "red";
        mensajeError.style.fontWeight = "bold";
        mensajeError.style.marginTop = "10px";
        mensajeError.style.textAlign = "center";
        event.preventDefault();
        return;
      }
      // Validar cada campo
      let errores = [];
      if (docNuevo && !regexDocumento.test(docNuevo)) {
        errores.push("Formato incorrecto para el numero de documento.");
      }
      // Mostrar errores o enviar el formulario
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
    // Agregar el evento de envío del formulario
    document.getElementById("formActualizarPedido").addEventListener("submit", validarFormulario);
    // Agregar eventos de entrada a todos los campos para eliminar el mensaje de error
    const campos = document.querySelectorAll("#formActualizarPedido input[type='text'], #formActualizarPedido input[type='password'], #formActualizarPedido input[type='number']");
    campos.forEach(campo => {
      campo.addEventListener("input", () => {
        mensajeError.textContent = "";
      });
    });
  </script>
</body>
</html>

