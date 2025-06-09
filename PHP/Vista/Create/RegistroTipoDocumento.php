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

  <!-- Formulario de Registro de Proveedor -->
  <section class="h-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-8">
          <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
            <div class="col-xl-10">
              <div class="card-body p-md-8 text-black">
               
                <h3 class="mb-5 text-uppercase" style="text-align: center;">REGISTRO TIPO DE DOCUMENTO</h3>
                <form  method="POST" onsubmit="return validarFormulario()">
                     <?php
                       include "../../Modelo/Conexion.php";
                       include "../../Controlador/conRegistroTipoDocumento.php";
                     ?>

                    <div class="-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="nombreDocumento" class="form-control form-control-lg" name="nombreDocumento">
                        <label class="form-label" for="nomPro">Nombre</label>
                        <br>
                        <span id="errorNombre" class="text-danger"></span>
                      </div>
                    </div>

                  <div id="emailHelp" class="form-text">Verifica todos los datos del tipo de documento antes de seleccionar "Registrar".</div>

                  <div class="d-flex justify-content-end pt-3">
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"><a href="../Read/viTipoDocumento.php" style="text-decoration: none; color:#f5eef8">Cancelar</a></button>
                    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg ms-2" name="registrarTD"><a style="text-decoration: none; color:#f5eef8">Confirmar</a></button>
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
    // Validacion del formulario
    function validarFormulario(){
      //Obtener los valores del campo
      const nombre = document.getElementById('nombreDocumento').value.trim();

      

      // Validar el nombre del tipo de docuemto
      if (nombre === "") {
          document.getElementById('errorNombre').innerText = "El nombre del tipo de documento es obligatorio.";
          return false;
        } 

        // Si todas las validaciones pasan, se envia el formulario
        return true;
    }

    // Función para limpiar mensajes de error al escribir en los campos
    function limpiarError(campoId, errorId) {
        document.getElementById(campoId).addEventListener('input', function () {
          document.getElementById(errorId).innerText = ""; // Limpiar el mensaje de error
        });
      }
  </script>
</body>
</html>