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
<body>
  <br><br>
  <section class="h-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-8">
          <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
            <div class="col-xl-10">
              <div class="card-body p-md-8 text-black">
                <h3 class="mb-5 text-uppercase" style="text-align: center;">ACTUALIZA TUS DATOS</h3>
                <form method="POST" id="formActualizarCliente">
                  <?php
                  /** @SuppressWarnings("php:S4833") */
                  include_once "../../Controlador/ActualizarCliente.php"; // NOSONAR
                  ?>
                  <input type="hidden" name="id" value="<?php echo $cliente['clie_Documento_PK']; ?>">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="nombreActual" class="form-control form-control-lg"  name="nombreActual" value="<?php echo $cliente["clie_nombre"]; ?>" readonly/>
                        <label class="form-label" for="form3Example1m">Nombre</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="nomNuevo" class="form-control form-control-lg" name="nombreNuevo"/>
                        <label class="form-label" for="form3Example1n"> <div id="emailHelp" class="form-text">Ingresa tu nombre nuevo.</div></label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="apellidoActual" class="form-control form-control-lg" name="apellidoActual" value="<?php echo $cliente["clie_apellido"]; ?>"  readonly/>
                        <label class="form-label" for="form3Example1m">Apellido</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="apeNuevo" class="form-control form-control-lg" name="apellidoNuevo"/>
                        <label class="form-label" for="form3Example1n"> <div id="emailHelp" class="form-text">Ingresa tu Apellido.</div></label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="number" id="telefonoActual" class="form-control form-control-lg" name="telefonoActual" value="<?php echo $cliente["clie_Telefono"]; ?>" readonly/>
                        <label class="form-label" for="form3Example1m">Teléfono</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="number" id="telNuevo" class="form-control form-control-lg" name="telefonoNuevo"/>
                        <label class="form-label" for="form3Example1n"> <div id="emailHelp" class="form-text">Ingresa tu número de teléfono nuevo.</div></label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="number" id="telefono2Actual" class="form-control form-control-lg" name="telefono2Actual" value="<?php echo $cliente["clie_Telefono2"]; ?>" readonly/>
                        <label class="form-label" for="form3Example1m">Teléfono 2</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="number" id="tel2Nuevo" class="form-control form-control-lg" name="telefono2Nuevo"/>
                        <label class="form-label" for="form3Example1n"> <div id="emailHelp" class="form-text">Ingresa tu número de teléfono nuevo.</div></label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="direccionActual" class="form-control form-control-lg" name="direccionActual" value="<?php echo $cliente["clie_direccion"]; ?>" readonly/>
                        <label class="form-label" for="form3Example1m">Dirección</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="dirNueva" class="form-control form-control-lg" name="direccionNueva"/>
                        <label class="form-label" for="form3Example1n"> <div id="emailHelp" class="form-text">Ingresa tu Dirección nueva.</div></label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="gmail" id="correoActual" class="form-control form-control-lg" name="correoActual" value="<?php echo $cliente["clie_correo"]; ?>" readonly/>
                        <label class="form-label" for="form3Example1m">Correo Electrónico</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="gmail" id="corNuevo" class="form-control form-control-lg" name="correoNuevo"/>
                        <label class="form-label" for="form3Example1n"> <div id="emailHelp" class="form-text">Ingresa tu Correo nuevo.</div></label>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="tipoDocumentoNuevo">Tipo de Documento Nuevo</label>
                    <select id="tipoDocumentoNuevo" name="tipoDocumentoNuevo" class="form-control">
                      <option value="1">Cédula de Ciudadanía</option>
                      <option value="2">Tarjeta de Identidad</option>
                      <option value="3">Cédula Extranjera</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="password" id="contraseñaActual" class="form-control form-control-lg" name="contraseñaActual" value="<?php echo $cliente["contrasena"]; ?>"  readonly/>
                        <label class="form-label" for="form3Example1m">Contraseña Actual</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="password" id="conNueva" class="form-control form-control-lg" name="contraseñaNueva"/>
                        <label class="form-label" for="form3Example1m"> <div id="emailHelp" class="form-text">Ingresa tu contraseña nueva.</div></label>
                      </div>
                    </div>
                  </div>
                  <!-- Mensaje de error -->
                  <div id="mensajeError" class="error-message"></div>
                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"><a href="../Read/viClientes.php" style="text-decoration: none; color:#f5eef8">Cancelar</a></button>
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg ms-2" name="actualizar" ><a style="text-decoration: none; color:#f5eef8">Actualizar</a></button>
                  </div>
                  <?php
                  ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
    console.log("El script se esta ejecutando...");
    // Obtener el elemento del mensaje de error
    const mensajeError = document.getElementById("mensajeError");
    // Expresiones regulares para validaciones
    const regexSoloTexto = /^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ\s]+$/; // Solo texto y espacios
    const regexTelefono = /^\d{10}$/; // Exactamente 10 dígitos
    const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Formato de correo válido
    const regexDireccion = /^[A-Za-z0-9\s#\-.,]+$/; // Dirección alfanumérica
    // Función para validar el formulario
    function validarFormulario(event) {
      console.log("Validando formulario...");
      // Obtener los valores de los campos
      const nombreNuevo = document.getElementById("nomNuevo").value.trim();
      const apellidoNuevo = document.getElementById("apeNuevo").value.trim();
      const telefonoNuevo = document.getElementById("telNuevo").value.trim();
      const telefono2Nuevo = document.getElementById("tel2Nuevo").value.trim();
      const direccionNueva = document.getElementById("dirNueva").value.trim();
      const correoNuevo = document.getElementById("corNuevo").value.trim();
      const contraseñaNueva = document.getElementById("conNueva").value.trim();
      // Verificar si todos los campos están vacíos
      if (!nombreNuevo && !apellidoNuevo && !telefonoNuevo && !telefono2Nuevo && !direccionNueva && !correoNuevo && !contraseñaNueva) {
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
      // Validar nombre
      if (nombreNuevo && !regexSoloTexto.test(nombreNuevo)) {
        errores.push("El nombre solo puede contener letras y espacios.");
      }
      // Validar apellido
      if (apellidoNuevo && !regexSoloTexto.test(apellidoNuevo)) {
        errores.push("El apellido solo puede contener letras y espacios.");
      }
      // Validar teléfono
      if (telefonoNuevo && !regexTelefono.test(telefonoNuevo)) {
        errores.push("El teléfono debe tener exactamente 10 dígitos.");
      }
      // Validar teléfono 2 (no es obligatorio, pero si tiene valor, debe ser válido)
      if (telefono2Nuevo && !regexTelefono.test(telefono2Nuevo)) {
        errores.push("El teléfono 2 debe tener exactamente 10 dígitos.");
      }
      // Validar dirección
      if (direccionNueva && !regexDireccion.test(direccionNueva)) {
        errores.push("La dirección contiene caracteres no válidos.");
      }
      // Validar correo
      if (correoNuevo && !regexCorreo.test(correoNuevo)) {
        errores.push("El correo electrónico no tiene un formato válido.");
      }
      // Validar contraseña
      if (contraseñaNueva && contraseñaNueva.length < 8) {
        errores.push("La contraseña debe tener al menos 8 caracteres.");
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
    document.getElementById("formActualizarCliente").addEventListener("submit", validarFormulario);
    // Agregar eventos de entrada a todos los campos para eliminar el mensaje de error
    const campos = document.querySelectorAll("#formActualizarCliente input[type='text'], #formActualizarCliente input[type='password'], #formActualizarCliente input[type='number']");
    campos.forEach(campo => {
      campo.addEventListener("input", () => {
        // Limpiar el mensaje de error cuando el usuario comience a escribir
        mensajeError.textContent = "";
      });
    });
  </script>
</body>
</html>

