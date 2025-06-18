<!doctype html>
<html lang="en">
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
  <title>Carrito</title>
</head>
<body style="position: relative; padding-bottom: 3rem; min-height: 100vh;">
  <!-- Start Header/Navigation -->
  <!-- End Header/Navigation -->
  <!-- Start Hero Section -->
  <div class="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">
          <div class="intro-excerpt">
            <h1>CARRITO DE COMPRAS</h1>
          </div>
        </div>
        <div class="col-lg-7">
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->
  
  <div class="untree_co-section before-footer-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <div class="site-blocks-table">
            <table class="table">
              <thead>
                <tr>
                  <th class="product-thumbnail">Imagen</th>
                  <th class="product-name">Producto</th>
                  <th class="product-price">Precio Unitario</th>
                  <th class="product-quantity">Cantidad</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">Eliminar</th>
                </tr>
              </thead>
              <tbody id="carrito-contenido">
                <!-- Los productos se cargarán dinámicamente aquí -->
                <tr id="carrito-vacio">
                  <td colspan="6" class="text-center py-5">
                    <h4>Tu carrito está vacío</h4>
                    <a href="catalogo.php" class="btn btn-black">Ir al catálogo</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-6">
              <a href="catalogo.php" class="btn btn-secondary btn-sm btn-block">Seguir Comprando</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Resumen del Pedido</h3>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <span class="text-black">Subtotal</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black" id="subtotal">$0</strong>
                </div>
              </div>
              <div class="row mb-3" id="descuento-container" style="display: none;">
                <div class="col-md-6">
                  <span class="text-black">Descuento</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black" id="descuento">-$0</strong>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black" id="total">$0</strong>
                </div>
              </div>
  
              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-secondary btn-lg py-3 btn-block" id="proceder-pago">Proceder</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Clase Carrito para manejar toda la lógica
      class Carrito {
        constructor() {
          this.carrito = JSON.parse(localStorage.getItem('carrito')) || [];
          this.cargarParametrosURL();
          this.renderizarCarrito();
          this.configurarEventos();
        }

        cargarParametrosURL() {
          const params = new URLSearchParams(window.location.search);
          const action = params.get('action');
          
          if (action === 'add') {
            const nombre = params.get('nombre');
            const codigo = params.get('codigo');
            const precio = parseFloat(params.get('precio'));
            const imagen = params.get('imagen');
            
            this.agregarProducto(nombre, codigo, precio, imagen);
            
            // Limpiar parámetros de la URL
            window.history.replaceState({}, document.title, window.location.pathname);
          }
        }

        agregarProducto(nombre, codigo, precio, imagen, cantidad = 1) {
          const productoExistente = this.carrito.find(item => item.codigo  === codigo);
          
          if (productoExistente) {
            productoExistente.cantidad += cantidad;
          } else {
            this.carrito.push({ nombre, codigo, precio, imagen, cantidad });
          }
          
          this.guardarCarrito();
        }

        eliminarProducto(index) {
          this.carrito.splice(index, 1);
          this.guardarCarrito();
        }

        actualizarCantidad(index, cantidad) {
          if (cantidad > 0) {
            this.carrito[index].cantidad = cantidad;
            this.guardarCarrito();
          }
        }

        calcularSubtotal() {
          return this.carrito.reduce((total, item) => total + (item.precio * item.cantidad), 0);
        }

        guardarCarrito() {
          localStorage.setItem('carrito', JSON.stringify(this.carrito));
          this.renderizarCarrito();
        }

        renderizarCarrito() {
          const tbody = document.getElementById('carrito-contenido');
          const subtotalEl = document.getElementById('subtotal');
          const totalEl = document.getElementById('total');
          const checkoutBtn = document.getElementById('proceder-pago');
          const emptyRow = document.getElementById('carrito-vacio');

          if (this.carrito.length === 0) {
            tbody.innerHTML = `
              <tr id="carrito-vacio">
                <td colspan="6" class="text-center py-5">
                  <h4>Tu carrito está vacío</h4>
                  <a href="shop.html" class="btn btn-black">Ir al catálogo</a>
                </td>
              </tr>
            `;
            checkoutBtn.disabled = true;
            subtotalEl.textContent = '$0';
            totalEl.textContent = '$0';
            return;
          }

          checkoutBtn.disabled = false;
          
          let html = '';
          const subtotal = this.calcularSubtotal();
          
          this.carrito.forEach((producto, index) => {
            const totalProducto = producto.precio * producto.cantidad;
            
            html += `
              <tr>
                <td class="product-thumbnail">
                  <img src="images/${producto.imagen}" alt="${producto.nombre}" class="img-fluid">
                </td>
                <td class="product-name">
                  <h2 class="h5 text-black">${producto.nombre}</h2>
                </td>
                <td>$${producto.precio.toLocaleString()}</td>
                <td>
                  <div class="input-group quantity-container" style="max-width: 120px;">
                    <button class="btn btn-outline-black decrease" type="button" data-index="${index}">−</button>
                    <input type="number" class="form-control text-center quantity-amount"
                           value="${producto.cantidad}" min="1" data-index="${index}">
                    <button class="btn btn-outline-black increase" type="button" data-index="${index}">+</button>
                  </div>
                </td>
                <td>$${totalProducto.toLocaleString()}</td>
                <td>
                  <button class="btn btn-black btn-sm btn-eliminar" data-index="${index}">X</button>
                </td>
              </tr>
            `;
          });
          
          tbody.innerHTML = html;
          subtotalEl.textContent = `$${subtotal.toLocaleString()}`;
          totalEl.textContent = `$${subtotal.toLocaleString()}`;
        }

        configurarEventos() {
          // Event delegation para los botones dinámicos
          document.addEventListener('click', (e) => {
            // Botones de disminuir cantidad
            if (e.target.classList.contains('decrease')) {
              const index = parseInt(e.target.dataset.index);
              if (this.carrito[index].cantidad > 1) {
                this.carrito[index].cantidad--;
                this.guardarCarrito();
              }
            }
            
            // Botones de aumentar cantidad
            if (e.target.classList.contains('increase')) {
              const index = parseInt(e.target.dataset.index);
              this.carrito[index].cantidad++;
              this.guardarCarrito();
            }
            
            // Botones de eliminar
            if (e.target.classList.contains('btn-eliminar')) {
              const index = parseInt(e.target.dataset.index);
              this.eliminarProducto(index);
            }
          });
          
          // Inputs de cantidad
          document.addEventListener('change', (e) => {
            if (e.target.classList.contains('quantity-amount')) {
              const index = parseInt(e.target.dataset.index);
              const nuevaCantidad = parseInt(e.target.value);
              this.actualizarCantidad(index, nuevaCantidad);
            }
          });
          // Botón de proceder al pago
          document.getElementById('proceder-pago').addEventListener('click', () => {
            if (this.carrito.length > 0) {
              // Crear formulario dinámico para enviar los datos
              const form = document.createElement('form');
              form.method = 'POST';
              form.action = 'procesocompra.php';
              
              // Agregar campo con los productos del carrito
              const carritoInput = document.createElement('input');
              carritoInput.type = 'hidden';
              carritoInput.name = 'carrito';
              carritoInput.value = JSON.stringify(this.carrito);
              form.appendChild(carritoInput);
              
              // Agregar campo con el subtotal
              const subtotalInput = document.createElement('input');
              subtotalInput.type = 'hidden';
              subtotalInput.name = 'subtotal';
              subtotalInput.value = this.calcularSubtotal();
              form.appendChild(subtotalInput);
              
              // Agregar formulario al documento y enviarlo
              document.body.appendChild(form);
              form.submit();
            }
          });
          
        }
      }

      // Inicializar el carrito
      new Carrito();
    });
  </script>
</body>
</html>


