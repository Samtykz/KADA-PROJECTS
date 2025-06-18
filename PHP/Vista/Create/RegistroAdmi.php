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
  <!-- Start Header/Navigation -->
  <br><br>

  <section class="h-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-8">
          <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
            <div class="col-xl-10">
              <div class="card-body p-md-8 text-black">
                <form method="POST" onsubmit="return validarFormulario()">
                  <?php
                  /** @SuppressWarnings("php:S4833") */
                  include "../../Modelo/Conexion.php";
                  include "../../Controlador/conRegistroAdministrador.php"; // NOSONAR
                  ?>
                  <h3 class="mb-5 text-uppercase" style="text-align: center;">REGíSTRATE</h3>

                  <div class="mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="admi_nombre" class="form-control form-control-lg" name="admi_nombre" />
                      <label class="form-label" for="admi_nombre">Nombre</label>
                      <br>
                      <span id="errorNombre" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="admi_apellido" class="form-control form-control-lg" name="admi_apellido"/>
                        <label class="form-label" for="admi_apellido">Apellido</label>
                        <br>
                        <span id="errorApellido" class="text-danger"></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="number" id="admi_telefono" class="form-control form-control-lg" name="admi_telefono"/>
                        <label class="form-label" for="admi_telefono">Teléfono</label>
                        <br>
                        <span id="errorTelefono" class="text-danger"></span>
                      </div>
                    </div>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="admi_direccion" class="form-control form-control-lg"  name="admi_direccion"/>
                    <label class="form-label" for="admi_direccion">Dirección</label>
                    <br>
                    <span id="errorDireccion" class="text-danger"></span>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="admi_correo" class="form-control form-control-lg" name="admi_correo"/>
                    <label class="form-label" for="admi_correo">Correo Electrónico</label>
                    <br>
                    <span id="errorCorreo" class="text-danger"></span>
                  </div>



                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="admi_contrasena" class="form-control form-control-lg" name="admi_contrasena"/>
                    <label class="form-label" for="admi_contrasena">Contraseña</label>
                    <br>
                    <span id="errorContrasena" class="text-danger"></span>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    
                    <input type="password" id="confirmar_contrasena" class="form-control form-control-lg" name="confirmar_contrasena"/>
                    <label class="form-label" for="confirmar_contrasena">Confirmar Contraseña</label>
                    <br>
                    <span id="errorConfirmarContrasena" class="text-danger"></span>
                    <div id="emailHelp" class="form-text">Verifica todos tus datos antes de seleccionar "Confirmar".</div>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"><a href="../Create/RegistroAdmi.php" style="text-decoration: none; color:#f5eef8">Reiniciar</a></button>
                    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg ms-2" name="registroadmi">Confirmar</button>
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
  <!-- Start Footer Section -->
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- Validacion del formulario -->

    <script>
      function validarFormulario() {
        // Obtener los valores de los campos
        const nombre = document.getElementById('admi_nombre').value.trim();
        const apellido = document.getElementById('admi_apellido').value.trim();
        const telefono = document.getElementById('admi_telefono').value.trim();
        const direccion = document.getElementById('admi_direccion').value.trim();
        const correo = document.getElementById('admi_correo').value.trim();
        const contrasena = document.getElementById('admi_contrasena').value.trim();
        const confirmarContrasena = document.getElementById('confirmar_contrasena').value.trim();

        // Formato para los campos
        const regexSoloLetras = /^[A-Za-zÁáÉéÍíÓóÚúÜü\s]+$/; // Solo letras y espacios
        const regexTelefono = /^\d{10}$/; // Exactamente 10 dígitos
        const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Formato de correo válido
        

        // Validar nombre
        if (nombre === "") {
          document.getElementById('errorNombre').innerText = "El nombre es obligatorio.";
          return false;
        } else if (!regexSoloLetras.test(nombre)) {
          document.getElementById('errorNombre').innerText = "El nombre solo puede contener letras.";
          return false;
        }

        // Validar apellido
        if (apellido === "") {
          document.getElementById('errorApellido').innerText = "El apellido es obligatorio.";
          return false;
        } else if (!regexSoloLetras.test(apellido)) {
          document.getElementById('errorApellido').innerText = "El apellido solo puede contener letras.";
          return false;
        }

        // Validar teléfono
        if (telefono === "") {
          document.getElementById('errorTelefono').innerText = "El teléfono es obligatorio.";
          return false;
        } else if (!regexTelefono.test(telefono)) {
          document.getElementById('errorTelefono').innerText = "El teléfono debe tener exactamente 10 dígitos.";
          return false;
        }

        // Validar dirección
        if (direccion === "") {
          document.getElementById('errorDireccion').innerText = "La dirección es obligatoria.";
          return false;
        }

        // Validar correo electrónico
        if (correo === "") {
          document.getElementById('errorCorreo').innerText = "El correo electrónico es obligatorio.";
          return false;
        } else if (!regexCorreo.test(correo)) {
          document.getElementById('errorCorreo').innerText = "El correo electrónico no es válido.";
          return false;
        }

        // Validar contraseña
        if (contrasena === "") {
          document.getElementById('errorContrasena').innerText = "La contraseña es obligatoria.";
          return false;
        } else if (contrasena.length < 8) {
          document.getElementById('errorContrasena').innerText = "La contraseña debe tener al menos 8 caracteres.";
          return false;
        }

        // Validar confirmación de contraseña
        if (confirmarContrasena === "") {
          document.getElementById('errorConfirmarContrasena').innerText = "Debes confirmar la contraseña.";
          return false;
        } else if (confirmarContrasena !== contrasena) {
          document.getElementById('errorConfirmarContrasena').innerText = "Las contraseñas no coinciden.";
          return false;
        }

        // Si todas las validaciones pasan, se envía el formulario
        return true;
      }

      // Función para limpiar mensajes de error al escribir en los campos
      function limpiarError(campoId, errorId) {
        document.getElementById(campoId).addEventListener('input', function () {
          document.getElementById(errorId).innerText = ""; // Limpiar el mensaje de error
        });
      }

      // Limpiar errores al escribir en cada campo
      limpiarError('admi_nombre', 'errorNombre');
      limpiarError('admi_apellido', 'errorApellido');
      limpiarError('admi_telefono', 'errorTelefono');
      limpiarError('admi_direccion', 'errorDireccion');
      limpiarError('admi_correo', 'errorCorreo');
      limpiarError('admi_contrasena', 'errorContrasena');
      limpiarError('confirmar_contrasena', 'errorConfirmarContrasena');
  </script>
</body>
</html>
