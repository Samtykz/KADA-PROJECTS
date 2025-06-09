<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="images/favicon.png">
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
		<title>Configuración de Administrador</title>
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
								<h1 style="font-size: 50px;">Configuración de Administrador</h1>
								<p class="mb-4">Bienvenido a la página de gestión de administrador, a través de esta interfaz podrás gestionar de manera eficiente diversas tablas, asegurando un funcionamiento ágil.</p>
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


		<!-- Start Testimonial Slider -->
		<div class="testimonial-section before-footer-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
                                                    <h1>Clientes</h1><br>
													<p>Visualiza y administra la información de tus clientes. Esta sección te permitirá actualizar sus datos, eliminar y agregar nuevos clientes a la base de datos de forma fácil y rápida.</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<a href="Read/viClientes.php"><img src="images/flecha.svg" alt="Maria Jones" class="img-fluid" style="height: 200px; width:126px;"></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
                                                    <h1>Pedidos</h1><br>
													<p>Accede y administra todos los pedidos. Desde aquí podrás Registrar, eliminar y modificar los mismos.</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<a href="Read/viPedido.php"><img src="images/flecha.svg" alt="Maria Jones" class="img-fluid" style="height: 200px; width:126px;"></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
                                                    <h1>Administradores</h1><br>
													<p>Aquí podrás agregar, eliminar y modificar los datos de los administradores.</p>
												</blockquote>
												<div class="author-info">
													<div class="author-pic">
														<a href="Read/viAdministradores.php"><img src="images/flecha.svg" alt="Maria Jones" class="img-fluid" style="height: 200px; width:126px;"></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div> 

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
                                                    <h1>Productos</h1><br>
													<p>Administra tu inventario de productos con total facilidad. Puedes agregar, modificar o eliminar productos.</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<a href="Read/productos.php"><img src="images/flecha.svg" alt="Maria Jones" class="img-fluid" style="height: 200px; width:126px;"></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div> 

                                <div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
                                                    <h1>Proveedores</h1><br>
													<p>Gestiona todos los proveedores, accediendo a sus datos, agregando nuevos proveedores y actualizando la información de los existentes.</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<a href="Read/viProveedor.php"><img src="images/flecha.svg" alt="Maria Jones" class="img-fluid" style="height: 200px; width:126px;"></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
                                
                                <div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
                                                    <h1>Detalles de pedido</h1><br>
													<p>Obtén un desglose completo de cada pedido.</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<a href="Read/viDetallePedido.php"><img src="images/flecha.svg" alt="Maria Jones" class="img-fluid" style="height: 200px; width:126px;"></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div> 

                                <div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
                                                    <h1>Categorías de Productos</h1><br>
													<p>Gestiona las categorías. Podrás crear, modificar y eliminar categorías, lo que te permitirá una estructuración más eficiente de los productos.</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<a href="Read/categorias.php"><img src="images/flecha.svg" alt="Maria Jones" class="img-fluid" style="height: 200px; width:126px;"></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div> 

                                <div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
                                                    <h1>Ventas</h1><br>
													<p>Consulta y gestiona todas las ventas realizadas.</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<a href="Read/viVentas.php"><img src="images/flecha.svg" alt="Maria Jones" class="img-fluid" style="height: 200px; width:126px;"></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

                                <div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
                                                    <h1>Tipos de Documento</h1><br>
													<p>Gestiona y controla todos los tipos de documento existentes en el sistema. Podrás crear, modificar y eliminar estos mismos.</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<a href="Read/viTipoDocumento.php"><img src="images/flecha.svg" alt="Maria Jones" class="img-fluid" style="height: 200px; width:126px;"></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div> 
							</div>
							

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
