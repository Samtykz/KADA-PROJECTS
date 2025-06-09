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
	<body style="position: relative; padding-bottom: 8rem; min-height: 100vh;">

        <?php
        include "../../Modelo/Conexion.php";
        ?>
		<br><br>

    <section class="h-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-8">
                <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
                    <div class="col-xl-10">
                      <div class="card-body p-md-8 text-black">
                      <form method="POST" id="formActualizarCategoria">
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Modificar Categoría</p>
                        <?php
                        include "../../Controlador/ActualizarCategoria.php";
                        ?>
                        <input type="hidden" name="id" value="<?php echo $categoria['id_Categoria_PK']; ?>">
                        <div class="row">
                              <div class="col-md-6 mb-4">
                                  <input type="text" id="form3Example4c" class="form-control" name="namecategoria" value="<?php echo $categoria["nombreCategoria"];?>" readonly>
                                  <label class="form-label" for="form3Example4c">Nombre de la categoría</label>
                              </div>
                              <div class="col-md-6 mb-4">
                                  <input type="text" id="nomNuevo" class="form-control" name="nombreNuevo">
                                  <label class="form-label" for="form3Example4c">Ingresa  el nuevo nombre de la categoria</label>
                              </div>
                              <?php 
                              ?>
                        </div>  
                        <!-- Mensaje de error -->
                        <div id="mensajeError" class="error-message"></div>
                        <div class="d-flex justify-content-end pt-3">
                           <a href="../Read/categorias.php"><button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Cancelar</button></a>
                           <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg" name="btnagregar" value="ok">Modificar</button>
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
	<br><br>	

    <!-- Start Footer Section -->
  <script src="js/bootstrap.bundle.min.js"></script>
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
              errores.push("El nombre solo puede contener letras y espacios.");
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

          // Si hay errores, retorna false
          if (errores.length > 0) {
              return false;
          }
    }

    // Agregar el evento de envío del formulario
    document.getElementById("formActualizarCategoria").addEventListener("submit", validarFormulario);

    // Agregar eventos de entrada a todos los campos para eliminar el mensaje de error
    const campos = document.querySelectorAll("#formActualizarCategoria input[type='text'], #formActualizarCategoria input[type='password'], #formActualizarCategoria input[type='number']");
    campos.forEach(campo => {
        campo.addEventListener("input", () => {
            mensajeError.textContent = "";
        });
    });
  </script>
</body>
</html>
	
	
