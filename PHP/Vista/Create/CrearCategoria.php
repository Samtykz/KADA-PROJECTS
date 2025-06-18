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
    <body style="position: relative; padding-bottom: 3rem; min-height: 100vh;">
        <br><br>
    <section class="h-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-8">
                <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
                    <div class="col-xl-10">
                      <div class="card-body p-md-8 text-black">
                        <form  method="POST" onsubmit="return validarFormulario()">
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Agregar Categoría</p>
                        <?php
                        /** @SuppressWarnings("php:S4833") */
                          include_once "../../Modelo/Conexion.php";
                          include_once "../../Controlador/conRegistrarCategoria.php"; // NOSONAR
                        ?>
                           <div class="d-flex flex-row align-items-center mb-4">
                             <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input type="text" id="nomCat" class="form-control" name="nombreCategoria">
                                   <label class="form-label" for="form3Example4c">Nombre de la categoría</label>
                                   <br>
                                   <span id="ErrorNomCategoria" class="text-danger"></span>
                             </div>
                            </div>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                           <a href="../Read/categorias.php"><button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Cancelar</button></a>
                           <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg" name="btnagregar" value="ok">Agregar</button>
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
    function validarFormulario(){
      // Obtener los valores del campo
      const nomCategoria = document.getElementById('nomCat').value.trim();
      // Validacion del nombre de la categoria
      if (nomCategoria === "") {
        document.getElementById('ErrorNomCategoria').innerText ="El nombre de la categoria es obligatorio.";
        return false;
      }
      //Si todas las valicaiones pasan, se envia el formulario
      return true
    }
  </script>
</body>
</html>
