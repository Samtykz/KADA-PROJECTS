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
                <h3 class="mb-5 text-uppercase" style="text-align: center;">REGÍSTRA UNA VENTA</h3>
                <form method="POST" onsubmit="return validarFormulario()">
                  <?php
                  /** @SuppressWarnings("php:S4833") */
                  include_once "../../Modelo/Conexion.php";
                  include_once "../../Controlador/ConRegistroVenta.php"; // NOSONAR
                  ?>
                  <input type="hidden" name="id" value="<?php echo $pedido['id_Pedido_FK']; ?>">
                  <div class="form-outline">
                    <label class="form-label" for="fecha">Fecha Actual</label>
                    <input type="date" id="fecha" name="fecha_venta" class="form-control form-control-lg"/>
                    <br>
                    <span id="errorFec" class="text-danger"></span>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="total">Total a Pagar</label>
                    <input type="text" id="total" name="total_venta" class="form-control form-control-lg" />
                    <br>
                    <span id="errorTotal" class="text-danger"></span>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="id_Pedido">ID del Pedido</label>
                        <input type="text" name="id_Pedido" class="form-control form-control-lg" value="<?php echo $pedido["id_Pedido_FK"]; ?>"/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="codAdmi">Digite su Código de Administrador</label>
                        <input type="text" id="codAdmi" name="admi_codigo" class="form-control form-control-lg" />
                        <br>
                        <span id="errorCod" class="text-danger"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="hora">Hora Actual</label>
                      <input type="time" id="hora" name="hora_venta" class="form-control form-control-lg" />
                      <br>
                      <span id="errorHora" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end pt-3">
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"><a href="../Read/viDetallePedido.php" style="text-decoration: none; color:#f5eef8">Cancelar</a></button>
                    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-lg ms-2" name="btnRegistrarVenta">Confirmar</button>
                  </div>
                  <br>  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br><br><br><br><br>
  <!-- Start Footer Section -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    // Validacion del formulario
    function validarFormulario(){
      // Obtener los valores del campo
      const fechaAct = document.getElementById('fecha').value;
      const porcIva = document.getElementById('iva') ? document.getElementById('iva').value.trim() : "";
      const totalPagar = document.getElementById('total').value.trim();
      const metodoPa = document.getElementById('metPago') ? document.getElementById('metPago').value.trim() : "";
      const codigoAdm = document.getElementById('codAdmi').value.trim();
      const horaAc = document.getElementById('hora').value;
      // Formatos para los campos
      const ahora = new Date();
      const año = ahora.getFullYear(); // Año con cuatro dígitos
      const mes = String(ahora.getMonth() + 1).padStart(2, '0'); // Mes con dos dígitos
      const dia = String(ahora.getDate()).padStart(2, '0'); // Día con dos dígitos
      const fechaActual = `${año}-${mes}-${dia}`; // Formato YYYY-MM-DD
      const horaActual = ahora.toTimeString().split(' ')[0].substring(0, 5); // Formato HH:MM
      // Validar la fecha actual
      if (fechaAct ==="") {
        document.getElementById('errorFec').innerText ="La fecha es obligatoria";
        return false;
      } else if (fechaAct !== fechaActual) {
        document.getElementById('errorFec').innerText ="La fecha debe ser la actual";
        return false;
      }
      // Validar el porcentaje del IVA (si existe el campo)
      if (document.getElementById('iva') && porcIva ==="") {
        document.getElementById('errorIva').innerText ="El porcentaje es obligatorio";
        return false;
      }
      // Validar el total a pagar
      if (totalPagar ==="") {
        document.getElementById('errorTotal').innerText ="El total es obligatorio";
        return false;
      }
      // Validar el codigo del administrador
      if (codigoAdm ==="") {
        document.getElementById('errorCod').innerText ="El codigo del administrador es obligatorio";
        return false;
      }
      // Validar la hora actual
      if (horaAc ==="") {
        document.getElementById('errorHora').innerText ="La hora es obligatoria";
        return false;
      } else if (horaAc !== horaActual) {
        document.getElementById('errorHora').innerText ="La hora debe ser la actual";
        return false;
      }
      return true;
    }
    function limpiarError(campoId, errorId){
      const campo = document.getElementById(campoId);
      if (campo) {
        campo.addEventListener('input', function () {
          document.getElementById(errorId).innerText ="";
        });
      }
    }
    // Limpiar errores al momento de escribir
    limpiarError('fecha', 'errorFec');
    limpiarError('iva', 'errorIva');
    limpiarError('total','errorTotal');
    limpiarError('codAdmi','errorCod');
    limpiarError('hora', 'errorHora');
  </script>
</body>
</html>

