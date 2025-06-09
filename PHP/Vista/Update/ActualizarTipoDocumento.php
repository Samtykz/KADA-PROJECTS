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
                        <h3 class="mb-5 text-uppercase" style="text-align: center;">ACTUALIZAR TIPO DE DOCUMENTO</h3>
                        <form method="POST" id="formActualizarTipoDocumento">
                          <?php
                          include "../../Controlador/ActualizarTipDoc.php";
                          ?>

                        <input type="hidden" name="id" value="<?php echo $tipodocumento['id_TipoDocumento_PK']; ?>">

                        <div class="row">
                          <div class="col-md-6 mb-4">
                            <div data-mdb-input-init class="form-outline">
                              <input type="text" id="form3Example1m" class="form-control form-control-lg"  name="nombreActual" value="<?php echo $tipodocumento["nombreDocumento"]; ?>" readonly/>
                              <label class="form-label" for="form3Example1m">Nombre</label>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div data-mdb-input-init class="form-outline">
                              <input type="text" id="nomNuevo" class="form-control form-control-lg" name="nombreNuevo"/>
                              <label class="form-label" for="form3Example1n"> <div id="emailHelp" class="form-text">Ingresa el nombre del tipo de documento nuevo.</div></label>
                            </div>
                          </div>
                        </div>
						<!-- Mensaje de error -->
                        <div id="mensajeError" class="error-message"></div>
                        
                        <div class="d-flex justify-content-end pt-3">
                          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"><a href="../Read/viTipoDocumento.php" style="text-decoration: none; color:#f5eef8">Cancelar</a></button>
                          <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg ms-2" name="actualizar" ><a style="text-decoration: none; color:#f5eef8">Actualizar</a></button>
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
          </div>   
        </section>
	<br><br>	
	
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
		console.log("El script se esta ejecutando...");
		const mensajeError = document.getElementById("mensajeError");

		// Expresiones regulares para validaciones
		const regexSoloTexto = /^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ\s]+$/; // Solo texto y espacios

		function validarFormulario(){
		console.log("Validando formulario...")

		// Obtener los valores de los campos
		const nombreNuevo = document.getElementById("nomNuevo").value.trim();

		// Verificar si todos los campos están vacíos
		if (!nombreNuevo) {
				mensajeError.textContent = "Todos los campos están vacíos. Debes ingresar al menos un valor para actualizar.";
				mensajeError.style.color = "red";
				mensajeError.style.fontWeight = "bold";
				mensajeError.style.marginTop = "10px";
				mensajeError.style.textAlign = "center";

				// Evitar que el formulario se envíe
				event.preventDefault();
				return;
			}

			// Validar cada campo
			let errores = [];  

			// Validar nombre
			if (nombreNuevo && !regexSoloTexto.test(nombreNuevo)) {
				errores.push("El nombre solo puede contener letras.");
			}

			// Mostrar errores o enviar el formulario
			if (errores.length > 0) {
				mensajeError.innerHTML = errores.join("<br>");
				mensajeError.style.color = "red";
				mensajeError.style.fontWeight = "bold";
				mensajeError.style.marginTop = "10px";
				mensajeError.style.textAlign = "center";

				// Evitar que el formulario se envíe
				event.preventDefault();
				} else {
				// Ocultar el mensaje de error si está visible
				mensajeError.textContent = "";
			}

			// Si hay errores, retorna false
			if (errores.length > 0) {
				return false;
			}
		}

		 // Agregar el evento de envío del formulario
		 document.getElementById("formActualizarTipoDocumento").addEventListener("submit", validarFormulario);

		// Agregar eventos de entrada a todos los campos para eliminar el mensaje de error
		const campos = document.querySelectorAll("#formActualizarTipoDocumento input[type='text'], #formActualizarTipoDocumento input[type='password'], #formActualizarTipoDocumento input[type='number']");
		campos.forEach(campo => {
			campo.addEventListener("input", () => {
				mensajeError.textContent = "";
			});
		});
	</script>
	</body>
</html>