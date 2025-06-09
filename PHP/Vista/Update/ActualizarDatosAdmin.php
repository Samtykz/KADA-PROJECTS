<!doctype html>
<html lang="en">
<head>
  <meta charset="es">
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
                <form id="formActualizarAdmin" method="POST">
                  
                  <?php
                  include "../../Controlador/ActualizarAdmin.php";
                  ?>

                  <input type="hidden" name="id" value="<?php echo $Admin['admi_Codigo_PK']; ?>">

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="nombreActual" class="form-control form-control-lg" name="nombreActual" value="<?php echo $Admin["admi_nombre"]; ?>" readonly/>
                        <label class="form-label" for="nombreActual">Nombre</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="nombreNuevo" class="form-control form-control-lg" name="nombreNuevo"/>
                        <label class="form-label" for="nombreNuevo"> <div id="emailHelp" class="form-text">Ingresa tu nombre nuevo.</div></label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="apellidoActual" class="form-control form-control-lg" name="apellidoActual" value="<?php echo $Admin["admi_apellido"]; ?>" readonly/>
                        <label class="form-label" for="apellidoActual">Apellido</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="apellidoNuevo" class="form-control form-control-lg" name="apellidoNuevo"/>
                        <label class="form-label" for="apellidoNuevo"> <div id="emailHelp" class="form-text">Ingresa tu Apellido.</div></label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="telefonoActual" class="form-control form-control-lg" name="telefonoActual" value="<?php echo $Admin["admi_telefono"]; ?>" readonly/>
                        <label class="form-label" for="telefonoActual">Teléfono</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="telefonoNuevo" class="form-control form-control-lg" name="telefonoNuevo"/>
                        <label class="form-label" for="telefonoNuevo"> <div id="emailHelp" class="form-text">Ingresa tu número de teléfono nuevo.</div></label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="direccionActual" class="form-control form-control-lg" name="direccionActual" value="<?php echo $Admin["admi_direccion"]; ?>" readonly/>
                        <label class="form-label" for="direccionActual">Dirección</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4"> 
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="direccionNueva" class="form-control form-control-lg" name="direccionNueva"/>
                        <label class="form-label" for="direccionNueva"> <div id="emailHelp" class="form-text">Ingresa Nueva Dirección.</div></label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="correoActual" class="form-control form-control-lg" name="correoActual" value="<?php echo $Admin["admi_correo"]; ?>" readonly/>
                        <label class="form-label" for="correoActual">Correo Electrónico</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="correoNuevo" class="form-control form-control-lg" name="correoNuevo"/>
                        <label class="form-label" for="correoNuevo"> <div id="emailHelp" class="form-text">Ingresa tu Correo nuevo.</div></label>
                      </div>
                    </div>
                  </div>

                  <!-- Mensaje de error -->
                  <div id="mensajeError" class="error-message"></div>

                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">
                      <a href="../Read/viAdministradores.php" style="text-decoration: none; color:#f5eef8">Cancelar</a>
                    </button>
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg ms-2" name="actualizar">Actualizar</button>
                  </div>
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
      const nombreNuevo = document.getElementById("nombreNuevo").value.trim();
      const apellidoNuevo = document.getElementById("apellidoNuevo").value.trim();
      const telefonoNuevo = document.getElementById("telefonoNuevo").value.trim();
      const direccionNueva = document.getElementById("direccionNueva").value.trim();
      const correoNuevo = document.getElementById("correoNuevo").value.trim();
      

      // Verificar si todos los campos están vacíos
      if (!nombreNuevo && !apellidoNuevo && !telefonoNuevo && !direccionNueva && !correoNuevo) {
        mensajeError.textContent = "Todos los campos están vacíos. Debes ingresar al menos un valor para actualizar.";
        mensajeError.style.color = "red"; // Color del texto
        mensajeError.style.fontWeight = "bold"; // Texto en negrita
        mensajeError.style.marginTop = "10px"; // Espacio superior        
        mensajeError.style.textAlign = "center"; // Centrar el texto

        // Evitar que el formulario se envíe
        event.preventDefault();
        return; // Salir de la función
      }

      // Validar cada campo solo si tiene un valor
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

      // Validar dirección
      if (direccionNueva && !regexDireccion.test(direccionNueva)) {
        errores.push("La dirección contiene caracteres no válidos.");
      }

      // Validar correo
      if (correoNuevo && !regexCorreo.test(correoNuevo)) {
        errores.push("El correo electrónico no tiene un formato válido.");
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
        } else {
          // Ocultar el mensaje de error si está visible
          mensajeError.textContent = ""; // Limpiar el mensaje
        }
    }

    // Agregar el evento de envío del formulario
    document.getElementById("formActualizarAdmin").addEventListener("submit", validarFormulario);

    // Agregar eventos de entrada a todos los campos para eliminar el mensaje de error
    const campos = document.querySelectorAll("#formActualizarAdmin input[type='text'], #formActualizarAdmin input[type='password']");
    campos.forEach(campo => {
      campo.addEventListener("input", () => {
        // Limpiar el mensaje de error cuando el usuario comience a escribir
        mensajeError.textContent = "";
      });
    });
</script>
</body> 
</html>