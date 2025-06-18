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
  <section class="h-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-8">
          <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
            <div class="col-xl-10">
              <div class="card-body p-md-8 text-black">
                <form method="POST" onsubmit="return validarFormulario()">
                  <h3 class="mb-5 text-uppercase" style="text-align: center;">REGíSTRAR PROVEEDOR</h3>
                  
                  <?php
                  /** @SuppressWarnings("php:S4833") */
                    include_once "../../Modelo/Conexion.php";
                    include_once "../../Controlador/conRegistroProveedor.php"; // NOSONAR
                  ?>
                  <div class="mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="nuDocumento">Numero de Documento</label>
                      <input type="number" id="nuDocumento" class="form-control form-control-lg" name="Documento" />
                      <br>
                      <span id="errorNum" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="nombrePro">Nombre</label>
                        <input type="text" id="nombrePro" class="form-control form-control-lg" name="Nombre"/>
                        <br>
                        <span id="errorNom" class="text-danger"></span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="telPro">Teléfono</label>
                        <input type="number" id="telPro" class="form-control form-control-lg" name="Telefono"/>
                      </div>
                      <span id="errorTel" class="text-danger"></span>
                    </div>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="dirPro">Dirección</label>
                    <input type="text" id="dirPro" class="form-control form-control-lg" name="Direccion"/>
                    <br>
                    <span id="errorDir" class="text-danger"></span>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="correoPro">Correo Electrónico</label>
                    <input type="gmail" id="correoPro" class="form-control form-control-lg" name="Correo"/>
                    <br>
                    <span id="errorCorr" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="idTipoDocumento">Tipo de Documento</label>
                    <select id="idTipoDocumento" name="idTipoDocumento" class="form-control">
                      <option value="1">Cédula de Ciudadanía</option>
                      <option value="3">Cédula Extranjera</option>
                      <option value="4">NIT</option>
                    </select>
                    <br>
                    <div id="emailHelp" class="form-text">Verifica todos los datos antes de seleccionar "Confirmar".</div>
                  </div>
                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">
                      <a href="../Create/RegistroAdmi.php" style="text-decoration: none; color:#f5eef8">Reiniciar</a>
                    </button>
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg ms-2" name="btnRegistrarProv">Confirmar</button>
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
    function validarFormulario() {
      // Obtener los valores de los campos
      const numDocumento = document.getElementById('nuDocumento').value.trim();
      const nombre = document.getElementById('nombrePro').value.trim();
      const telefono = document.getElementById('telPro').value.trim();
      const direccion = document.getElementById('dirPro').value.trim();
      const correo = document.getElementById('correoPro').value.trim();
      // Formatos para los campos
      const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; //Formato para el correo electrónico
      const regexTelefono = /^\d{10}$/; // Exactamente 10 dígitos
      // Validar número de documento
      if (numDocumento === "") {
        document.getElementById('errorNum').innerText = "El número de documento es obligatorio.";
        return false;
      }
      // Validar nombre
      if (nombre === "") {
        document.getElementById('errorNom').innerText = "El nombre es obligatorio.";
        return false;
      }
      // Validar teléfono
      if (telefono === "") {
        document.getElementById('errorTel').innerText = "El número de teléfono es obligatorio.";
        return false;
      } else if (!regexTelefono.test(telefono)) {
        document.getElementById("errorTel").innerText ="El número de telefono no es valido";
        return false;
      }
      // Validar dirección
      if (direccion === "") {
        document.getElementById('errorDir').innerText = "La dirección es obligatoria.";
        return false;
      }
      // Validar correo
      if (correo === "") {
        document.getElementById('errorCorr').innerText = "El correo electrónico es obligatorio.";
        return false;
      } else if (!regexCorreo.test(correo)) {
        document.getElementById('errorCorr').innerText = "El correo electrónico no es válido.";
        return false;
      }
      // Si todas las validaciones pasan, el formulario se envía
      return true;
    }
    // Función para limpiar mensajes de error al escribir en los campos
    function limpiarError(campoId, errorId) {
      document.getElementById(campoId).addEventListener('input', function () {
        document.getElementById(errorId).innerText = ""; // Limpiar el mensaje de error
      });
    }
    // Limpiar errores al escribir en cada campo
    limpiarError('nuDocumento', 'errorNum');
    limpiarError('nombrePro', 'errorNom');
    limpiarError('telPro', 'errorTel');
    limpiarError('dirPro', 'errorDir');
    limpiarError('correoPro', 'errorCorr');
  </script>
</body>
</html>

