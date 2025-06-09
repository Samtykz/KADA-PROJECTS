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
                        <h3 class="mb-5 text-uppercase" style="text-align: center;">ACTUALIZAR DATOS PROVEEDOR</h3>
                        <form method="POST" id="formActualizarProveedor">
                          <?php
                          include "../../Controlador/ActualizarProveedor.php";
                          ?>


                        <input type="hidden" name="id" value="<?php echo $proveedor['documentoProveedor_PK']; ?>">
                        <div class="row">
                          <div class="col-md-6 mb-4">
                            <div data-mdb-input-init class="form-outline">
                              <input type="text" id="form3Example1m" class="form-control form-control-lg"  name="nombreActual" value="<?php echo $proveedor["nombreProveedor"]; ?>" readonly/>
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
                                <input type="number" id="form3Example1m" class="form-control form-control-lg" name="telefonoActual" value="<?php echo $proveedor["telefonoProveedor"]; ?>" readonly/>
                                <label class="form-label" for="form3Example1m">Teléfono</label>
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div data-mdb-input-init class="form-outline">
                                <input type="number" id="numNuevo" class="form-control form-control-lg" name="telefonoNuevo"/>
                                <label class="form-label" for="form3Example1n"> <div id="emailHelp" class="form-text">Ingresa tu número de teléfono nuevo.</div></label>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 mb-4">
                              <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form3Example1m" class="form-control form-control-lg" name="direccionActual" value="<?php echo $proveedor["direccionProveedor"]; ?>" readonly/>
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
                                <input type="gmail" id="form3Example1m" class="form-control form-control-lg" name="correoActual" value="<?php echo $proveedor["correoProveedor"]; ?>" readonly/>
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
                            <label class="form-label">Tipo de Documento Nuevo</label>
                             <select name="tipoDocumentoNuevo" class="form-control">
                               <option value="1">Cédula de Ciudadanía</option>
                               <option value="3">Cédula Extranjera</option>
                               <option value="4">NIT</option>
                             </select>
                          </div>

                          <!-- Mensaje de error -->
                          <div id="mensajeError" class="error-message"></div>
                        <div class="d-flex justify-content-end pt-3">
                          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"><a href="../Read/viProveedor.php" style="text-decoration: none; color:#f5eef8">Cancelar</a></button>
                          <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg ms-2" name="actualizar" >Actualizar</button>
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
    
    const mensajeError = document.getElementById("mensajeError");

    // Expresiones regulares para validaciones
    const regexSoloTexto = /^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ\s]+$/; // Solo texto y espacios
    const regexTelefono = /^\d{9}$/; // Para números de 10 dígitos
    const regexDireccion = /^[A-Za-z0-9\s#\-.,]+$/; // Dirección alfanumérica
    const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Formato de correo válido

      function validarFormulario(event){
          
        console.log("Validando formulario...");
         // Obtener los valores de los campos
         const nombreNuevo = document.getElementById("nomNuevo").value.trim();
         const telefonoNuevo = document.getElementById("numNuevo").value.trim();
         const direccionNueva = document.getElementById("dirNueva").value.trim();
         const correoNuevo = document.getElementById("corNuevo").value.trim();

          // Verificar si todos los campos están vacíos
          if (!nombreNuevo && !telefonoNuevo && !direccionNueva && !correoNuevo) {
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
              errores.push("El nombre solo puede contener letras y espacios.");
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
              mensajeError.innerHTML = errores.join("<br>");
              mensajeError.style.color = "red";
              mensajeError.style.fontWeight = "bold";
              mensajeError.style.marginTop = "10px";
              mensajeError.style.textAlign = "left";

              // Evitar que el formulario se envíe
              event.preventDefault();
              } else {
              // Ocultar el mensaje de error si está visible
              mensajeError.textContent = "";
          }

      }

    // Agregar el evento de envío del formulario
    document.getElementById("formActualizarProveedor").addEventListener("submit", validarFormulario);

  // Agregar eventos de entrada a todos los campos para eliminar el mensaje de error
  const campos = document.querySelectorAll("#formActualizarProveedor input[type='text'], #formActualizarProveedor input[type='password'], #formActualizarProveedor input[type='number']");
  campos.forEach(campo => {
      campo.addEventListener("input", () => {
          mensajeError.textContent = "";
      });
  });
  </script>
	</body>
</html>