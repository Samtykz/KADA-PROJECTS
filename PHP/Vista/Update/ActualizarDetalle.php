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
    <?php
        include "../../Modelo/Conexion.php";
         $id=$_GET["id"];
         $sql=$conexion->query("SELECT * from detallepedido where id_Pedido_FK =$id");
    ?>
    <section class="h-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-8">
                <div class="card card-registration my-4" style="display: flex; justify-content: center; align-items: center; border-radius: 15px;">
                    <div class="col-xl-10">
                      <div class="card-body p-md-8 text-black">
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Modificar El Detalle de Pedido</p>
                          <form method="POST" id="formActualizarDetallePedido">
                            <input type="hidden" name="id" value="<?= $_GET["id"]?>" readonly>
                            <?php
                            include  "../../Controlador/ActualizarDetallePedido.php";
                            ?>
                              <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="number" id="idProducto" class="form-control" name="Prod_id" value="<?php echo $detalle["prod_Codigo_FK"];?>" readonly>
                                    <label for="exampleInputEmail1" class="form-label">ID del Producto Pedido</label>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" id="idProNue" class="form-control" name="idNuevo">
                                    <label for="exampleInputEmail1" class="form-text">Ingresa el ID del Producto Pedido.</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="number" class="form-control" name="cantidad" value="<?php echo $detalle["cantidadProductoPedido"];?>" readonly>
                                    <label for="exampleInputEmail1"  class="form-label">Cantidad Producto Pedido</label>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" id="CanNueva" class="form-control" name="cantidadNueva" >
                                    <label for="exampleInputEmail1" class="form-text">Ingresa la Cantidad Pedida del Producto.</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="number" class="form-control" name="precioUnidad" value="<?php echo $detalle["precioUnidadProducto"];?>" readonly>
                                    <label for="exampleInputEmail1" class="form-label">Precio Por Unidad del Producto.</label>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" id="preNuevo" class="form-control" name="precioNuevo">
                                    <label for="exampleInputEmail1" class="form-text">Ingresa el Precio Por Unidad del Producto.</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6 mb-4">
                                  <input type="text" name="metodoP_venta" class="form-control form-control-lg" value="<?php echo $detalle["metodo_pago"]; ?>" readonly>
                                  <label class="form-label">Método de Pago</label>
                                </div>
                                <div class="col-md-6 mb-4">
                                  <input type="text" id="metNuevo" name="metodoP_venta" class="form-control form-control-lg">
                                  <label class="form-text">Ingresa el nuevo dato</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="number"  class="form-control" name="subtotal" value="<?php echo $detalle["subtotalPedidoProducto"];?>" readonly>
                                    <label for="exampleInputEmail1" class="form-label">Subtotal</label>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" id="subNuevo" class="form-control" name="subNuevo">
                                    <label for="exampleInputEmail1" class="form-text">Ingresa el Subtotal.</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6 mb-4 ">
                                    <input type="number" class="form-control" name="Ped_id" value="<?php echo $detalle["id_Pedido_FK"];?>" readonly>
                                    <label for="exampleInputEmail1" class="form-label">ID del Pedido</label>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" id="idPedNuevo" class="form-control" name="idPedidoNuevo">
                                    <label for="exampleInputEmail1" class="form-text">Ingresa el ID del Pedido.</label>
                                </div>
                              </div>

                              <!-- Mensaje de error -->
                              <div id="mensajeError" class="error-message"></div>
                              <br>
                              <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                  <a href="../Read/viDetallePedido.php"><button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Cancelar</button></a>
                                  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg" name="btnActualizar" value="ok">Modificar</button>
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
   	<br><br><br><br><br><br>
	  

    
  <!-- Start Footer Section -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    console.log("El script se esta ejecutando...");
    // Obtener el elemento del mensaje de error
    const mensajeError = document.getElementById("mensajeError");

      // Expresiones regulares para validaciones  
      const regexIdProducto = /^\d{1,10}$/; // Entre 1 y 10 dígitos
      const regexCantidad = /^[1-9]\d*$/; // Números enteros positivos (no cero)
      const regexPrecio = /^\d+(\.\d{1,2})?$/; // Números con hasta 2 decimales
      const regexSubtotal = /^\d+(\.\d{1,2})?$/; // Igual que precio
      const regexIdPedido = /^\d{1,10}$/; // Entre 1 y 10 dígitos

    function validarFormulario(event){
      console.log("Validando formulario...");
      // Obtener los valores de los campos
      const idProNuevo = document.getElementById("idProNue").value.trim();
      const canProPedNuevo = document.getElementById("CanNueva").value.trim();
      const preUnitarioNuevo = document.getElementById("preNuevo").value.trim();
      const metodoNuevo = document.getElementById("metNuevo").value.trim(); 
      const subtoNuevo = document.getElementById("subNuevo").value.trim();
      const idPedidoNuevo = document.getElementById("idPedNuevo").value.trim();
      

      // Verificar si todos los campos están vacíos
      if (!idProNuevo && !canProPedNuevo && !preUnitarioNuevo && !metodoNuevo && !subtoNuevo && !idPedidoNuevo) {
        mensajeError.textContent = "Todos los campos están vacíos. Debes ingresar al menos un valor para actualizar.";
        mensajeError.style.color = "red"; // Color del texto
        mensajeError.style.fontWeight = "bold"; // Texto en negrita
        mensajeError.style.marginTop = "10px"; // Espacio superior
        mensajeError.style.textAlign = "center"; // Centrar el texto

        // Evitar que el formulario se envíe
        event.preventDefault();
        return; // Salir de la función
      }

      // Validar cada campo
      let errores = [];


      if (idProNuevo && !regexIdProducto.test(idProNuevo)) {
        errores.push("El ID del producto debe tener entre 1 y 10 dígitos.");
      }

      if (canProPedNuevo && !regexCantidad.test(canProPedNuevo)) {
        errores.push("La cantidad debe ser un número entero positivo (mayor que cero).");
      }
      
      if (preUnitarioNuevo && !regexPrecio.test(preUnitarioNuevo)) {
        errores.push("El precio debe ser un número con hasta 2 decimales (ej: 25.99).");
      }

      // Validar metodo de pago
      if (metodoNuevo && !regexMetodoPago.test(metodoNuevo)) {
        errores.push("El metedo de pago es incorrecto.");
      }
      
      if (subtoNuevo && !regexSubtotal.test(subtoNuevo)) {
        errores.push("El subtotal debe ser un número con hasta 2 decimales.");
      }
      
      if (idPedidoNuevo && !regexIdPedido.test(idPedidoNuevo)) {
        errores.push("El ID del pedido debe tener entre 1 y 10 dígitos.");
      }

      // Mostrar errores o enviar el formulario
      if (errores.length > 0) {
        // Configurar el estilo del mensaje de error
        mensajeError.innerHTML = errores.join("<br>"); // Mostrar todos los errores
        mensajeError.style.color = "red"; // Color del texto
        mensajeError.style.fontWeight = "bold"; // Texto en negrita
        mensajeError.style.marginTop = "10px"; // Espacio superior  
        mensajeError.style.textAlign = "center"; // Alinear el texto a la izquierda

        // Evitar que el formulario se envíe
        event.preventDefault();
        } 

      // Si hay errores, retorna false
      if (errores.length > 0) {
          return false;
      }
    }
    // Agregar el evento de envío del formulario
    document.getElementById("formActualizarDetallePedido").addEventListener("submit", validarFormulario);

    // Agregar eventos de entrada a todos los campos para eliminar el mensaje de error
    const campos = document.querySelectorAll("#formActualizarDetallePedido input[type='text'], #formActualizarDetallePedido input[type='password'], #formActualizarDetallePedido input[type='number']");
    campos.forEach(campo => {
      campo.addEventListener("input", () => {
        // Limpiar el mensaje de error cuando el usuario comience a escribir
        mensajeError.textContent = "";
      });
    });
  </script>
</body>
</html>