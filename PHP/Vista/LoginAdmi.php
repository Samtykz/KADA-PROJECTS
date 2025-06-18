<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <?php
  header("Access-Control-Allow-Origin: *"); // Permite peticiones desde Angular
  ?>
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>KADA</title>
</head>
<body>
  <!-- Start Header/Navigation -->
  <br><br><br>
  <div class="main">
    <h1 style="font-size: 40px; text-align: center; color: black;">INICIAR SESIÓN COMO ADMINISTRADOR</h1>
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-6" style="margin: 0 auto">
        <form action="../Controlador/loginAuth.php" method="POST">
          <div class="mb-3">
            <label class="form-label" for="mail">Ingresa Correo Electrónico</label>
            <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
            <div class="form-text">Tu correo nunca será compartido con nadie más.</div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="pass">Ingresar Contraseña</label>
            <input type="password" class="form-control" id="pass" name="pass">
          </div>
          <input type="submit" class="btn btn-secondary me-2" name="btnLogin" value="Iniciar Sesión">
        </form>
      </div>
    </div>
  </div>
  <br><br>
  <!-- Start Footer Section -->
  <footer class="footer-section">
    <div class="container relative">
      <div class="row g-5 mb-5">
        <div class="col-lg-4 ">
          <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo" style="color: black;">KADA</a></div>
          <p class="mb-4">Bienvenido a Sistema de información KADA, un sitio web en el cuál podras encontrar buzos únicos y a la moda. En cada prenda aseguramos que obtengas la máxima comodidad y estilo. Nos enorgullece ofrecer una amplia variedad de buzos que se adaptan a todos los gustos y ocasiones. ¡GRACIAS POR ELEGIRNOS! </p>
        </div>
        <div class="col-lg-8">
          <div class="row links-wrap">
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Productos Recientes</a></li>
                <li><a href="#">Contáctanos</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Half Zip Sweaters</a></li>
                <li><a href="#">Oversize Hoodies</a></li>
                <li><a href="#">Hoodies</a></li>
                <li><a href="#">Crewnecks</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top copyright">
        <div class="row pt-4">
          <p style="text-align: center;">Copyright &copy; 2024 KADA</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

