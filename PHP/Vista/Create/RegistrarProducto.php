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
<body style="position: relative; padding-bottom: 8rem; min-height: 100vh;">
  <br><br><br>
  <section class="vh-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-8">
          <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
            <div class="col-xl-10">
              <div class="card-body p-md-8 text-black">
                <form class="mx-1 mx-md-4" method="POST" onsubmit="return validarFormulario()">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registrar Producto</p>
                  <?php
                  /** @SuppressWarnings("php:S4833") */
                    include_once "../../Modelo/Conexion.php";
                    include_once "../../Controlador/conRegistrarProducto.php"; // NOSONAR
                  ?>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="nomPro">Nombre</label>
                      <input type="text" id="nomPro" class="form-control" name="nombrepro"/>
                      <br>
                      <span id="errorNombre" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="precioPro">Precio</label>
                      <input type="number" id="precioPro" class="form-control" name="preciopro"/>
                      <br>
                      <span id="errorPrecio" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="medPro">Unidad-Medida (Talla)</label>
                      <input type="text" id="medPro" class="form-control" name="unidadmedida"/>
                      <br>
                      <span id="errorMedida" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="stkPro">Stock</label>
                      <input type="number" id="stkPro" class="form-control" name="stockpro"/>
                      <br>
                      <span id="errorStk" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="maPro">Material</label>
                      <input type="text" id="maPro" class="form-control" name="materialpro"/>
                      <br>
                      <span id="errorMaterial" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="descPro">Descripción</label>
                      <input type="text" id="descPro" class="form-control" name="descripcionpro"/>
                      <br>
                      <span id="errorDesc" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="categoriapro">Categoría</label>
                      <select class="form-control" id="categoriapro" name="categoriapro" required>
                        <option value="" disabled selected>Categoría</option>
                        <option value="1">Oversize</option>
                        <option value="2">Crewneck</option>
                        <option value="3">Half Zip</option>
                        <option value="4">Hoodie</option>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="docProveedor">Documento Proveedor</label>
                      <input type="number" id="docProveedor" class="form-control" name="proveedorpro"/>
                      <br>
                      <span id="errorDoc" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <a href="../Read/productos.php"><button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Cancelar</button></a>
                    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg" name="btnregistrar" value="ok">Registrar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <!-- Start Footer Section -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    // Validacion del formulario
    function validarFormulario(){
      const nombre = document.getElementById('nomPro').value.trim();
      const precio = document.getElementById('precioPro').value.trim();
      const uMedida = document.getElementById('medPro').value.trim();
      const stock = document.getElementById('stkPro').value.trim();
      const material = document.getElementById('maPro').value.trim();
      const descripcion = document.getElementById('descPro').value.trim();
      const documentoPro = document.getElementById('docProveedor').value.trim();
      // Validar nombre
      if (nombre === "") {
          document.getElementById('errorNombre').innerText = "El nombre del producto es obligatorio.";
          return false;
      }
      // Validar precio
      if (precio === "") {
        document.getElementById('errorPrecio').innerText ="el Precio es obligatorio";
        return false;
      }
      // Validar medida
      if (uMedida === "") {
        document.getElementById('errorMedida').innerText ="La medida es obligatorio";
        return false;
      }
      // Validar stock
      if (stock === "") {
        document.getElementById('errorStk').innerText ="El stock es obligatorio";
        return false;
      }
      // Validar material
      if (material === "") {
        document.getElementById('errorMaterial').innerText ="El material es obligatorio";
        return false;
      }
      // Validar descripcion
      if (descripcion === "") {
        document.getElementById('errorDesc').innerText ="La descripción es obligatoria";
        return false;
      }
      // Validar documento
      if (documentoPro === "") {
        document.getElementById('errorDoc').innerText ="El Documento del proveedor es obligatorio";
        return false;
      }
      // Si tdas las validaciones pasan, el formulario se envia
      return true;
    }
    // Función para limpiar mensajes de error al escribir en los campos
    function limpiarError(campoId, errorId) {
      document.getElementById(campoId).addEventListener('input', function () {
        document.getElementById(errorId).innerText = ""; // Limpiar el mensaje de error
      });
    }
    // Limpiar errores al memento ded escribir
    limpiarError('nomPro', 'errorNombre');
    limpiarError('precioPro', 'errorPrecio');
    limpiarError('medPro', 'errorMedida');
    limpiarError('stkPro', 'errorStk');
    limpiarError('maPro', 'errorMaterial');
    limpiarError('descPro', 'errorDesc');
    limpiarError('docProveedor', 'errorDoc');
  </script>
</body>
</html>