<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("Location:Vista/LoginAdmi.php");
	exit();
}
header("Location:indexAdmin.php")
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
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>KADA</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">KADA<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Inicio</a>
						</li>
						<li><a class="nav-link" href="shop.html">Catálogo</a></li>
						<li><a class="nav-link" href="services.html">Servicios</a></li>
						<li><a class="nav-link" href="blog.html">Productos Recientes</a></li>
						<li><a class="nav-link" href="contact.html">Contáctanos</a></li>
                        <li><a class="nav-link" href="#">Configuración de Administrador</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="login.html"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Todos <span clsas="d-block">Somos Estrellas</span></h1>
								<p class="mb-4">Encuentra tu estilo con KADA.</p>
								<p><a href="shop.html" class="btn btn-secondary me-2">Empieza a Comprar</a><a href="#pro-sec" class="btn btn-white-outline">Explorar</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/LKADA.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<a name="pro-sec"></a>
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Construidos con excelentes materiales</h2>
						<p class="mb-4">Manejamos diferentes tipos de tela, para hacerte sentir comodidad con cada uno de nuestros productos.</p>
						<p><a href="shop.html" class="btn">Catálogo</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/P.S IMG1.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Baby Tears</h3>
							<strong class="product-price">$178.000.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/P.S IMG2.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Certified Lover Hood</h3>
							<strong class="product-price">$190.000.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/P.S IMG3.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Savage Mode</h3>
							<strong class="product-price">$230.000.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Variedad</h2>
						<p>Manejamos diferentes categorías de productos, dentro de las cuales se encuentran: </p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<h3>Half Zip</h3>
									<p>Este sweater de media cremallera es una versión fresca y moderna de las prendas masculinas clásicas.</p>
								</div>
							</div>

							<div class="col-6 col-md-6"> 
								<div class="feature">
									<h3>Crewneck</h3>
									<p>El tradicional sweater de cuello redondo es un clásico confiable que nunca pasa de moda.	</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<h3>Hoodie</h3>
									<p>Un hoodie es una prenda de vestir versátil que combina la comodidad de una sudadera con la funcionalidad de una capucha.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<h3>Oversize</h3>
									<p>La ropa oversize es una clara referencia a los años ochenta, cuando llevar prendas de tallas más grandes estaba a la orden del día.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">¡Lo Nuevo!</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="shop.html|" class="more">Mira todos los productos</a>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Kada Kien</a></h3>
								<div class="meta">
									<span>Lanzado en <a href="#">Diciembre 20, 2024</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Baby Tears</a></h3>
								<div class="meta">
									<span>Lanzado en <a href="#">Agosto 15, 2024</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Savage Mode</a></h3>
								<div class="meta">
									</span> <span>Lanzado en <a href="#">Septiembre 08, 2024</a></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">
				<div class="row g-5 mb-5">
					<div class="col-lg-4 ">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">KADA</a></div>
						<p class="mb-4">Bienvenido a Sistema de información KADA, un sitio web en el cuál podras encontrar buzos únicos y a la moda. En cada prenda aseguramos que obtengas la máxima comodidad y estilo. Nos enorgullece ofrecer una amplia variedad de buzos que se adaptan a todos los gustos y ocasiones. ¡GRACIAS POR ELEGIRNOS!	</p>
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
							<div class="col-6 col-sm-6 col-md-3">
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
			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
