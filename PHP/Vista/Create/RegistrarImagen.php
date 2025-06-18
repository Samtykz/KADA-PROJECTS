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
  <h1 style="font-size: 40px; text-align: center; color: black;">PEDIDO</h1>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-6" style="margin: 0 auto">
        <form method="POST" onsubmit="return validarFormulario()">
          <?php
          /** @SuppressWarnings("php:S4833") */
            include_once "../../Modelo/Conexion.php";
            include_once "../../Controlador/ConRegistrarPedido.php";// NOSONAR
          ?>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-labblacel">Documento del Cliente</label>
            <input type="number" id="numDocClie" class="form-control" name="DocClie" >
            <br>
            <span id="errorDocClie" class="text-danger"></span>
          </div>
          <div class="mb-3">
            <div class="form-group col-md-4">
              <label for="inputDate">Fecha del Pedido</label>
              <input type="date" class="form-control" id="inputDate" name="fecha"/>
              <br>
              <span id="errorFecha" class="text-danger"></span>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-group col-md-4">
              <label for="inputHour">Hora del Pedido</label>
              <input type="time" class="form-control" id="inputHour" name="hora"/>
              <br>
              <span id="errorHora" class="text-danger"></span>
            </div>
          </div>
          <br>
          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"><a href="../Read/viPedido.php" style="text-decoration: none; color:#f5eef8">Cancelar</a></button>
          <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" value="Registrar" name="btnRegistrarPedido" style="background-color: #9b59b6; border: none;">
        </form>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br>
    
<!-- Start Footer Section -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Validacion del formulario -->
<script>
  function validarFormulario(){
    // Obtener  los valores de los campos
    const numDoc = document.getElementById('numDocClie').value.trim();
    const fechaPed = document.getElementById('inputDate').value;
    const horPed = document.getElementById('inputHour').value;
    // Formatos para los campos
    const regexDocumento =/^\d{6,10}$/; // Formato para el campo del numero de documento
    // validar el numero de docuemto del cliente
    if (numDoc ==="") {
      document.getElementById('errorDocClie').innerText ="El numero de documento del cliente es obligatorio";
      return false;
    }else if (!regexDocumento.test(numDoc)) {
      document.getElementById('errorDocClie').innerText ="El numero de documento debe tener entre 6 y 10 digitos";
      return false;
    }
    // Validar la fecha del pedido
    if (fechaPed ==="") {
      document.getElementById('errorFecha').innerText ="La fecha del pedido es obligatoria";
      return false;
    }
    // Validar la hora del pedido
    if (horPed ==="") {
      document.getElementById('errorHora').innerText ="La hora del pedido es obligatoria";
      return false;
    }
    // Si las validaciones pasan, el formulario se envia
    return true;
  }
  // Funcion para limpiar losmensajes de error
  function limpiarError(campoId, errorId){
    document.getElementById(campoId).addEventListener('input', function () {
      document.getElementById(errorId).innerText ="";
    });
  }
  // Limpiar errores al momento de escribir
  limpiarError('numDocClie', 'errorDocClie');
  limpiarError('inputDate', 'errorFecha');
  limpiarError('inputHour', 'errorHora');
</script>
</body>
</html>


