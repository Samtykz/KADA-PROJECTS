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
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
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
                <h3 class="mb-5 text-uppercase" style="text-align: center;">REGÍSTRATE</h3>
                <form method="POST" onsubmit="return validarFormulario()">
                  <?php
                  /** @SuppressWarnings("php:S4833") */
                  include_once "../Modelo/Conexion.php";
                  include_once "../Controlador/conRegistrate.php"; // NOSONAR
                  ?>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="nom" name="nombre" class="form-control form-control-lg" />
                        <label class="form-label" for="nombre">Nombre</label>
                        <br>
                        <span id="errorNom" class="text-danger"></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="ape" name="apellido" class="form-control form-control-lg" />
                        <label class="form-label" for="apellido">Apellido</label>
                        <br>
                        <span id="errorApe" class="text-danger"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="number" id="tel" name="telefono" class="form-control form-control-lg" />
                        <label class="form-label" for="telefono">Teléfono</label>
                        <br>
                        <span id="errorTel" class="text-danger"></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="number" id="telefono2" name="telefono2" class="form-control form-control-lg" />
                        <label class="form-label" for="telefono2">Teléfono 2</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="number" id="dto" name="documento" class="form-control form-control-lg" />
                    <label class="form-label" for="documento">Número de Documento</label>
                    <br>
                    <span id="errorNumDoc" class="text-danger"></span>
                  </div>
                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                    <h6 class="mb-0 me-4">Tipo Documento:</h6>
                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="idTipoDocumento" id="tipoCedula" value="1" />
                      <label class="form-check-label" for="tipoCedula">Cédula de Ciudadanía</label>
                    </div>
                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="idTipoDocumento" id="tipoTarjeta" value="2" />
                      <label class="form-check-label" for="tipoTarjeta">Tarjeta de Identidad</label>
                    </div>
                    <div class="form-check form-check-inline mb-0">
                      <input class="form-check-input" type="radio" name="idTipoDocumento" id="tipoExtranjeria" value="3" />
                      <label class="form-check-label" for="tipoExtranjeria">Documento Extranjería</label>
                    </div>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" id="dir" name="direccion" class="form-control form-control-lg" />
                    <label class="form-label" for="direccion">Dirección</label>
                    <br>
                    <span id="errorDir" class="text-danger"></span>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="gmail" id="corr" name="correo" class="form-control form-control-lg" />
                    <label class="form-label" for="correo">Correo Electrónico</label>
                    <br>
                    <span id="errorCorr" class="text-danger"></span>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="contra" class="form-control form-control-lg" name="contraseña"/>
                    <label class="form-label" for="form3Example90">Contraseña</label>
                    <br>
                    <span id="errorCon" class="text-danger"></span>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="confCon" class="form-control form-control-lg" name="conContraseña"/>
                    <label class="form-label" for="form3Example90">Confirmar Contraseña</label>
                    <br>
                    <span id="errorConfCon"  class="text-danger"></span>
                    <div id="emailHelp" class="form-text">Verifica todos tus datos antes de seleccionar "Confirmar".</div>
                  </div>
                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"><a href="../Create/RegistrarCliente.php" style="text-decoration: none; color:#f5eef8">Reiniciar</a></button>
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg ms-2" name="registrarClie">
                      <a style="text-decoration: none; color:#f5eef8">Confirmar</a>
                    </button>
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
  <script>
    function validarFormulario(){
      // Obtener valores de los campos
      const nombre = document.getElementById('nom').value.trim();
      const apellido = document.getElementById('ape').value.trim();
      const telefono = document.getElementById('tel').value.trim();
      const numDoc = document.getElementById('dto').value.trim();
      const direccion = document.getElementById('dir').value.trim();
      const correo = document.getElementById('corr').value.trim();
      const contraseña = document.getElementById('contra').value.trim();
      const confirmarContraseña = document.getElementById('confCon').value.trim();
      
      // Formatos para los campos
      const regexSoloLetras = /^[A-Za-zÁáÉéÍíÓóÚúÜü\s]+$/; // Solo letras y espacios
      const regexTelefono = /^\d{10}$/; // Exactamente 10 dígitos
      const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Formato de correo válido
      const regexDocumento =/^\d{6,10}$/; // Formato para el numero de documento
      // Validar nombre
      if (nombre ==="") {
        document.getElementById("errorNom").innerText ="El nombre es obligatorio";
        return false;
      } else if (!regexSoloLetras.test(nombre)) {
        document.getElementById('errorNom').innerText="El nombre solo puede contener letras";
        return false;
      }
      // Validar apellido
      if (apellido ==="") {
        document.getElementById("errorApe").innerText ="El apellido es obligatorio";
        return false;
      }
      // Validar telefono
      if (telefono ==="") {
        document.getElementById("errorTel").innerText ="El telefono es obligatorio";
        return false;
      } else if (!regexTelefono.test(telefono)) {
        document.getElementById("errorTel").innerText ="El numero de telefono no es valido";
        return false;
      }
      // Validar numero del documento del cliente
      if (numDoc ==="") {
        document.getElementById("errorNumDoc").innerText ="El numero de documento es obligatorio";
        return false;
      } else if (!regexDocumento.test(numDoc)) {
        document.getElementById("errorNumDoc").innerText ="El numero de documento no es valido";
        return false;
      }
      // Validar la direccion del cliente
      if (direccion ==="") {
        document.getElementById("errorDir").innerText ="La direccion del cliente es obligatoria";
        return false;
      }
      // Validar el correo del cliente
      if (correo === "") {
          document.getElementById('errorCorr').innerText = "El correo electrónico es obligatorio.";
          return false;
      } else if (!regexCorreo.test(correo)) {
        document.getElementById('errorCorr').innerText = "El correo electrónico no es válido.";
        return false;
      }
      // Validar contraseña
      if (contraseña === "") {
          document.getElementById('errorCon').innerText = "La contraseña es obligatoria.";
          return false;
      } else if (contraseña.length < 8) {
          document.getElementById('errorCon').innerText = "La contraseña debe tener al menos 8 caracteres.";
          return false;
      }
      // Validar confirmación de contraseña
      if (confirmarContraseña === "") {
          document.getElementById('errorConfCon').innerText = "Debes confirmar la contraseña.";
          return false;
      } else if (confirmarContraseña !== contraseña) {
          document.getElementById('errorConfCon').innerText = "Las contraseñas no coinciden.";
          return false;
      }
      return true;
    }
     // Función para limpiar mensajes de error al escribir en los campos
     function limpiarError(campoId, errorId) {
        document.getElementById(campoId).addEventListener('input', function () {
        document.getElementById(errorId).innerText = ""; // Limpiar el mensaje de error
        });
      }
      // Limpiar errores al escribir en cada campo
      limpiarError('nom', 'errorNom');
      limpiarError('ape', 'errorApe');
      limpiarError('tel', 'errorTel');
      limpiarError('dto', 'errorNumDoc');
      limpiarError('dir', 'errorDir');
      limpiarError('corr', 'errorCorr');
      limpiarError('nomUsua', 'errorNomUsu');
      limpiarError('contra', 'errorCon');
      limpiarError('confCon', 'errorConfCon');
  </script>
</body>
</html>
