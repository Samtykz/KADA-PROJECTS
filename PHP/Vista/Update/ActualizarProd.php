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
<body style="position: relative; padding-bottom: 10rem; min-height: 100vh;">
  <br><br>
  <section class="vh-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-8">
          <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
            <div class="col-xl-10">
              <div class="card-body p-md-8 text-black">
                <form id="formActualizarProducto" method="POST">
                  <h3 class="mb-5 text-uppercase" style="text-align: center;">MODIFICAR PRODUCTO</h3>
                  <?php
                  /** @SuppressWarnings("php:S4833") */
                  include_once "../../Controlador/ActualizarProducto.php"; // NOSONAR
                  ?>
                  <input type="hidden" name="id" value="<?php echo $producto['prod_Codigo_PK']; ?>">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="text" id="nombrepro" class="form-control" name="nombrepro" value="<?php echo $producto["prod_Nombre"]; ?>" readonly>
                        <label for="nombrepro" class="form-text">Nombre</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="text" id="nomNuevo" class="form-control" name="nombreNuevo">
                        <label for="nomNuevo" class="form-text">Nombre nuevo del producto</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="number" id="preciopro" class="form-control" name="preciopro" value="<?php echo $producto["prod_PrecioVenta"]; ?>" readonly>
                        <label for="preciopro" class="form-text">Precio</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="number" id="preNuevo" class="form-control" name="precioNuevo">
                        <label for="preNuevo" class="form-text">Ingrese Precio nuevo</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="text" id="unidadmedida" class="form-control" name="unidadmedida" value="<?php echo $producto["prod_UnidadMedida"]; ?>" readonly>
                        <label for="unidadmedida" class="form-text">Unidad-Medida (Talla)</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="text" id="medNuevo" class="form-control" name="tallaNueva">
                        <label for="medNuevo" class="form-text">Unidad-Medida (Talla) nueva</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="number" id="stockpro" class="form-control" name="stockpro" value="<?php echo $producto["prod_Stock"]; ?>" readonly>
                        <label for="stockpro" class="form-text">Stock</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="number" id="stkNuevo" class="form-control" name="stockNuevo">
                        <label for="stkNuevo" class="form-text">Ingrese el Stock nuevo</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="text" id="materialpro" class="form-control" name="materialpro" value="<?php echo $producto["prod_Material"]; ?>" readonly>
                        <label for="materialpro" class="form-text">Material</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="text" id="matNueva" class="form-control" name="materialNuevo">
                        <label for="matNueva" class="form-text">Material nuevo</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="text" id="descripcionpro" class="form-control" name="descripcionpro" value="<?php echo $producto["prod_Descripcion"]; ?>" readonly>
                        <label for="descripcionpro" class="form-text">Descripción</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="text" id="desNueva" class="form-control" name="descripcionNueva">
                        <label for="desNueva" class="form-text">Descripción nueva</label>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <select class="form-control" id="categoriaPro" name="categoriaPro" value="<?php echo $producto["id_Categoria_FK "]; ?>">
                        <option value="" disabled selected>Categoría</option>
                        <option value="1">Oversize</option>
                        <option value="2">Crewneck</option>
                        <option value="3">Half Zip</option>
                        <option value="4">Hoodie</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="number" id="proveedorpro" class="form-control" name="proveedorpro" value="<?php echo $producto["documentoProveedor_FK"]; ?>" readonly>
                        <label for="proveedorpro" class="form-text">Documento Proveedor</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <input type="number" id="proNuevo" class="form-control" name="proveedorNuevo">
                        <label for="proNuevo" class="form-text">Documento Proveedor</label>
                      </div>
                    </div>
                  </div>
                  <!-- Mensaje de error -->
                  <div id="mensajeError" class="error-message"></div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <a href="../Read/productos.php"><button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Cancelar</button></a>
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg" name="modificar" value="ok">Modificar</button>
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
    console.log("El script se está ejecutando");
    // Obtener el elemento del mensaje de error
    const mensajeError = document.getElementById("mensajeError");
    // Expresiones regulares para validaciones
    const regexSoloTexto = /^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ\s]+$/; // Solo texto y espacios
    const regexNumeroPositivo = /^\d+$/; // Para números positivos
    const regexDecimal = /^\d+([.,]\d{1,2})?$/; // Para decimales con punto o coma
    const regexDocumento = /^\d{9}$/; // Para números de 9 dígitos (ajusta a 10 si es necesario)
    // Función para validar el formulario
    function validarFormulario(event) {
      if (event) {
        event.preventDefault();
      }
      console.log("Validando formulario...");
      // Obtener los valores de los campos
      const nombreNuevo = document.getElementById("nomNuevo").value.trim();
      const precioNuevo = document.getElementById("preNuevo").value.trim();
      const medidaNueva = document.getElementById("medNuevo").value.trim();
      const stockNuevo = document.getElementById("stkNuevo").value.trim();
      const materialNuevo = document.getElementById("matNueva").value.trim();
      const descripcionNueva = document.getElementById("desNueva").value.trim();
      const proveedorNuevo = document.getElementById("proNuevo").value.trim();
      // Verificar si todos los campos están vacíos
      if (!nombreNuevo && !precioNuevo && !medidaNueva && !stockNuevo && !materialNuevo && !descripcionNueva && !proveedorNuevo) {
        mensajeError.textContent = "Todos los campos están vacíos. Debes ingresar al menos un valor para actualizar.";
        mensajeError.style.color = "red";
        mensajeError.style.fontWeight = "bold";
        mensajeError.style.marginTop = "10px";
        mensajeError.style.textAlign = "center";
        event.preventDefault();
        return;
      }
      // Validar cada campo
      let errores = [];
      // Validar nombre
      if (nombreNuevo && !regexSoloTexto.test(nombreNuevo)) {
        errores.push("El nombre solo puede contener letras y espacios.");
      }
      // Validar precio
      if (precioNuevo && !regexNumeroPositivo.test(precioNuevo)) {
        errores.push("Formato no válido para el precio.");
      }
      // Validar medida
      if (medidaNueva && !regexSoloTexto.test(medidaNueva)) {
        errores.push("La medida solo puede contener letras y espacios.");
      }
      // Validar stock
      if (stockNuevo && !regexNumeroPositivo.test(stockNuevo)) {
        errores.push("El stock solo puede contener números positivos.");
      }
      // Validar descripción
      if (descripcionNueva && !regexSoloTexto.test(descripcionNueva)) {
        errores.push("La descripción solo puede contener letras y espacios.");
      }
      // Validar proveedor (ajusta a 10 dígitos si corresponde)
      if (proveedorNuevo && !regexDocumento.test(proveedorNuevo)) {
        errores.push("El proveedor debe tener exactamente 9 dígitos.");
      }
      // Mostrar errores o enviar el formulario
      if (errores.length > 0) {
        mensajeError.innerHTML = errores.join("<br>");
        mensajeError.style.color = "red";
        mensajeError.style.fontWeight = "bold";
        mensajeError.style.marginTop = "10px";
        mensajeError.style.textAlign = "left";
        event.preventDefault();
      } else {
        mensajeError.textContent = "";
      }
      return true;
    }
    // Agregar el evento de envío del formulario
    document.getElementById("formActualizarProducto").addEventListener("submit", validarFormulario);
    // Agregar eventos de entrada a todos los campos para eliminar el mensaje de error
    const campos = document.querySelectorAll("#formActualizarProducto input[type='text'], #formActualizarProducto input[type='password'], #formActualizarProducto input[type='number']");
    campos.forEach(campo => {
      campo.addEventListener("input", () => {
        mensajeError.textContent = "";
      });
    });
  </script>
</body>
</html>


