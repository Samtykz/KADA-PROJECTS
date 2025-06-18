<?php
// Iniciar sesión al principio del script (ANTES de cualquier salida HTML)
session_start();
/** @SuppressWarnings("php:S4833") */
include_once '../../Modelo/Conexion.php'; // NOSONAR

// Procesar formulario si se envió
if (isset($_POST['btnSubirImagen'])) {
    // Validar campos requeridos
    if (!isset($_POST['prod_Codigo']) || empty($_POST['prod_Codigo'])) {
        $_SESSION['mensaje'] = "Error: El código del producto es requerido.";
        $_SESSION['tipo_mensaje'] = "danger";
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

    // Asignar valores con validación
    $codigoImagenes = $_POST['codigoImagenes'] ?? '';
    $prod_Codigo = $_POST['prod_Codigo'];
    $errores = array();
    
    // Validar imagen
    if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] != UPLOAD_ERR_OK) {
        $errores[] = "Debe seleccionar una imagen válida.";
    } else {
        // Validar tipos de archivo permitidos
        $permitidos = array('image/jpeg', 'image/png', 'image/gif');
        if (!in_array($_FILES['imagen']['type'], $permitidos)) {
            $errores[] = "Solo se permiten imágenes JPG, PNG o GIF.";
        }
        
        // Validar tamaño máximo (2MB)
        if ($_FILES['imagen']['size'] > 2097152) {
            $errores[] = "La imagen no debe superar los 2MB.";
        }
    }
    
    // Crear directorio si no existe
    $directorio = "../../images/";
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
    }
    
    if (empty($errores)) {
        // Generar nombre único para el archivo
        $extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
        $nombreArchivo = uniqid('img_', true) . '.' . $extension;
        $rutaCompleta = $directorio . $nombreArchivo;
        
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaCompleta)) {
            // Guardar en base de datos
            $sql = "INSERT INTO imagenes (codigoImagenes, prod_Codigo, imagen)
                    VALUES (?, ?, ?)";
                    
            $stmt = $conexion->prepare($sql);
            $rutaRelativa = "images/" . $nombreArchivo;
            
            if ($stmt->bind_param("sss", $codigoImagenes, $prod_Codigo, $rutaRelativa) && $stmt->execute()) {
                $_SESSION['mensaje'] = "Imagen subida y registrada correctamente!";
                $_SESSION['tipo_mensaje'] = "success";
            } else {
                // Si falla la inserción, eliminar la imagen subida
                unlink($rutaCompleta);
                $_SESSION['mensaje'] = "Error al guardar en la base de datos: " . $conexion->error;
                $_SESSION['tipo_mensaje'] = "danger";
            }
        } else {
            $_SESSION['mensaje'] = "Error al subir la imagen.";
            $_SESSION['tipo_mensaje'] = "danger";
        }
    } else {
        $_SESSION['mensaje'] = implode("<br>", $errores);
        $_SESSION['tipo_mensaje'] = "danger";
    }
    
    // Redirigir para evitar reenvío del formulario
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

// Obtener el código del producto desde la URL
$llave = isset($_GET['prod_Codigo']) ? $_GET['prod_Codigo'] : '';
?>

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
  <title>Subir Imágenes - KADA</title>
  
  <style>
    .error { color: red; }
    .success { color: green; }
    table { margin: 20px; }
    td { padding: 10px; }
  </style>
</head>

<body style="position: relative; padding-bottom: 8rem; min-height: 100vh; display: flex; justify-content: center; align-items: center;">

<div class="container mt-5" style="width: 100%; max-width: 500px; text-align: center;">
  <h2 class="mb-4">Subir Imágenes de Producto</h2>

  <form action="" method="post" enctype="multipart/form-data">
    <table class="table-bordered" style="width: 100%; margin: 0 auto;">
      <tr>
        <td><label for="codigoImagenes">Código:</label></td>
        <td>
          <input type="text" name="codigoImagenes" id="codigoImagenes" class="form-control">
        </td>
      </tr>
      <tr>
        <td><label for="prod_Codigo">Código Producto:</label></td>
        <td>
          <input type="text" name="prod_Codigo" id="prod_Codigo" value="<?php echo htmlspecialchars($llave); ?>" class="form-control" readonly>
        </td>
      </tr>
      <tr>
        <td><label for="imagen">Imagen:</label></td>
        <td>
          <input type="file" name="imagen" id="imagen" class="form-control" required>
          <small class="text-muted">Formatos permitidos: JPG, PNG, GIF (Máx. 2MB)</small>
        </td>
      </tr>
      <tr>
        <td colspan="2" class="text-center">
          <button type="submit" name="btnSubirImagen" class="btn btn-primary">Subir Imagen</button>
        </td>
      </tr>
    </table>
  </form>
</div>

<?php
// Mostrar mensajes de sesión
if(isset($_SESSION['mensaje'])) {
    echo '<div class="container mt-3"><div class="alert alert-'.$_SESSION['tipo_mensaje'].'">'.$_SESSION['mensaje'].'</div></div>';
    unset($_SESSION['mensaje']);
    unset($_SESSION['tipo_mensaje']);
}
?>

</body>
</html>
