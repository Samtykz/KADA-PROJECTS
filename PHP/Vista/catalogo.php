<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <?php
  header("Access-Control-Allow-Origin: *");  // Permite cualquier origen (¡solo para desarrollo!)
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type");
  ?>
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
  <title>KADA - CATÁLOGO</title>
</head>
<body>
  <!-- Start Header/Navigation -->
  <!-- End Header/Navigation -->
  <!-- Start Hero Section -->
  <div class="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">
          <div class="intro-excerpt">
            <h1>Catálogo</h1>
            <p class="mb-4">Encuentra tu estilo con KADA.</p>
            <p class="mb-4">Explora nuestro catálogo de productos, organizados por secciones. Para comprar un producto, simplemente haz clic en el botón "Comprar ahora" y completa los formularios requeridos. ¡Fácil y rápido!</p>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="hero-img-wrap">
            <img src="images/LKADA.png" class="img-fluid" alt="Logo KADA">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->
  <br>
  <div class="untree_co-section product-section before-footer-section">
    <div class="container">
      <div class="row">
        <!-- Inicio de seccion de Oversize -->
        <h1 style="text-align: center;" id="oversize">Oversize</h1>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="../images/img_67f5a42d8fc414.83653354.png" class="img-fluid product-thumbnail" alt="Buzo Oversize Manantial">
            <h3 class="product-title">Manantial</h3>
            <strong class="product-price">$250.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Manantial&codigo=1&precio=250000&imagen=ove1.png" class="acart">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="../images/img_67f6d29c031608.47429669.png" class="img-fluid product-thumbnail" alt="Buzo Oversize MF DOOM Merch Hoddie">
            <h3 class="product-title">MF DOOM Merch Hoddie</h3>
            <strong class="product-price">$290.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=MF DOOM Merch Hoddie&codigo=9&precio=290000&imagen=ove2.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="../images/img_67f6d30b95a1a7.59496546.png" class="img-fluid product-thumbnail" alt="Buzo Oversize Bad rust">
            <h3 class="product-title">Bad rust</h3>
            <strong class="product-price">$123.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Bad rust&codigo=12&precio=123000&imagen=ove3.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="../images/img_67f6d2ec9f6ea4.23275114.png" class="img-fluid product-thumbnail" alt="Buzo Oversize Algarete">
            <h3 class="product-title">Algarete</h3>
            <strong class="product-price">$218.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Algarete&codigo=11&precio=218000&imagen=ove4.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <br>
        <!-- Final de seccion de Oversize -->
        <h1 style="text-align: center;" id="crewnecks">CrewNecks</h1>
        <!-- Inicio de seccion de Crewnecks -->
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="../images/img_67f6d20b44ba05.47235112.png" class="img-fluid product-thumbnail" alt="Crewneck Aqua">
            <h3 class="product-title">Aqua</h3>
            <strong class="product-price">$340.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Aqua&codigo=2&precio=340000&imagen=cn1.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="../images/img_67f6d2c31e86c4.43195575.png" class="img-fluid product-thumbnail" alt="Crewneck Gaete">
            <h3 class="product-title">gaete</h3>
            <strong class="product-price">$140.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=gaete&codigo=10&precio=140000&imagen=cn2.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="../images/img_67f6e69199b817.40055655.png" class="img-fluid product-thumbnail" alt="Crewneck UrbanFit">
            <h3 class="product-title">UrbanFit</h3>
            <strong class="product-price">$180.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=UrbanFit&codigo=31&precio=180000&imagen=cn3.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/cn4.png" class="img-fluid product-thumbnail" alt="Crewneck Austin">
            <h3 class="product-title">Austin</h3>
            <strong class="product-price">$210.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Austin&codigo=6&precio=210000&imagen=cn4.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <!-- Final de seccion de Crewnecks -->
        <br>
        <h1 style="text-align: center;" id="halfzip">Half Zip</h1>
        <!-- Inicio de seccion de Half Zip -->
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/hz1.png" class="img-fluid product-thumbnail" alt="Half Zip Zipper">
            <h3 class="product-title">Zipper</h3>
            <strong class="product-price">$200.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Zipper&codigo=3&precio=200000&imagen=hz1.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/hz2.png" class="img-fluid product-thumbnail" alt="Half Zip NeoHood">
            <h3 class="product-title">NeoHood</h3>
            <strong class="product-price">$280.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=NeoHood&codigo=32&precio=280000&imagen=hz2.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/hz3.png" class="img-fluid product-thumbnail" alt="Half Zip Arctic Flow">
            <h3 class="product-title">Arctic Flow</h3>
            <strong class="product-price">$178.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Artic Flow&codigo=33&precio=178000&imagen=hz3.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/hz4.png" class="img-fluid product-thumbnail" alt="Half Zip StormWear">
            <h3 class="product-title">StormWear</h3>
            <strong class="product-price">$270.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=StormWear&codigo=44&precio=270000&imagen=hz4.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <br>
        <!-- Final de seccion de Half Zip -->
        <h1 style="text-align: center;" id="hoodies">Hoodies</h1>
        <!-- Inicio de seccion de Hoodies -->
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/hoo1.png" class="img-fluid product-thumbnail" alt="Hoodie Lenix">
            <h3 class="product-title">Lenix</h3>
            <strong class="product-price">$80.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Lenix&codigo=4&precio=80000&imagen=hoo1.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/hoo2.png" class="img-fluid product-thumbnail" alt="Hoodie RutsEze">
            <h3 class="product-title">RutsEze</h3>
            <strong class="product-price">$300.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=RutsEze&codigo=8&precio=300000&imagen=hoo2.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/hoo3.png" class="img-fluid product-thumbnail" alt="Hoodie Oblivions Mighty Trash">
            <h3 class="product-title">Oblivions Mighty Trash</h3>
            <strong class="product-price">$150.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Oblivions Mighty Trash&codigo=28&precio=150000&imagen=hoo3.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/hoo4.png" class="img-fluid product-thumbnail" alt="Hoodie SkyWave">
            <h3 class="product-title">SkyWave</h3>
            <strong class="product-price">$110.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=SkyWave&codigo=47&precio=110000&imagen=hoo4.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/P.S IMG1.png" class="img-fluid product-thumbnail" alt="Hoodie Baby Tears">
            <h3 class="product-title">Baby Tears</h3>
            <strong class="product-price">$178.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Baby Tears&codigo=29&precio=178000&imagen=P.S IMG1.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/P.S IMG2.png" class="img-fluid product-thumbnail" alt="Hoodie Certified Lover Hood">
            <h3 class="product-title">Certified Lover Hood</h3>
            <strong class="product-price">$190.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Certified Lover Hood&codigo=49&precio=190000&imagen=P.S IMG2.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/P.S IMG3.png" class="img-fluid product-thumbnail" alt="Hoodie Savage Mode">
            <h3 class="product-title">Savage Mode</h3>
            <strong class="product-price">$230.000.00</strong>
          </a>
          <a href="carrito.php?action=add&nombre=Savage Mode&codigo=50&precio=230000&imagen=P.S IMG3.png">
            <button class="btn-comprar">
              <h3 class="btncom">Comprar ahora</h3>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Footer Section -->
  <footer class="footer-section">
    <div class="container relative">
      <div class="row g-5 mb-5">
        <div class="col-lg-4 ">
          <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">KADA</a></div>
          <p class="mb-4">Bienvenido a Sistema de información KADA, un sitio web en el cuál podras encontrar buzos únicos y a la moda. En cada prenda aseguramos que obtengas la máxima comodidad y estilo. Nos enorgullece ofrecer una amplia variedad de buzos que se adaptan a todos los gustos y ocasiones. ¡GRACIAS POR ELEGIRNOS!</p>
        </div>
        <div class="col-lg-8">
          <div class="row links-wrap">
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contáctanos</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="shop.html#halfzip">Half Zip Sweaters</a></li>
                <li><a href="shop.html#oversize">Oversize Hoodies</a></li>
                <li><a href="shop.html#hoodies">Hoodies</a></li>
                <li><a href="shop.html#crewnecks">Crewnecks</a></li>
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
  <!-- End Footer Section -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>

