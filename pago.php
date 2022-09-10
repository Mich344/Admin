<!DOCTYPE html>
<html lang = "es">
<head>
<title>Pagos</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pagos.scss" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<!--header-->
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a style="color: #B2051F">SPORTS<b>WEARLINE</b><span class="tag"><strong> Vístete bien, hoy tienes una cita con el deporte ¡Marca tú estilo!</strong></span></a></h1> <br>
				</div>
	<!--//header-->
	
<div>
  <div>
      <br>  Es esta tu direccion de envio o desea editarla?
      <address>
            Nombre del comprador <br>
            telefono del comprador <br>
            Email del comprador <br>
            Direccion,Ciudad <br>
      </address>
  </div>
</div> 
	
	

<div>
	<h5> PRODUCTOS A PAGAR </h5>
	<div class="container">
		  <div class="images">
		    <img src="http://mistillas.cl/wp-content/uploads/2018/04/Nike-Epic-React-Flyknit-%E2%80%9CPearl-Pink%E2%80%9D-01.jpg" />
		  </div>
		  <div class="slideshow-buttons">
		    <div class="one"></div>
		    <div class="two"></div>
		    <div class="three"></div>
		    <div class="four"></div>
		  </div>
		  <div class="product">
			<p>Nombre</p>
		    	<h2>Precio</h2>
		    <p class="desc">Descripcion</p>
		    <div class="buttons">
			<p>Talla elegida</p>
			<p>Color elegida</p>
			<p>Cantidad de productos elegidos</p>
		    </div>
		  </div>
	</div>

<footer>
  <p>made by <a href="https://codepen.io/juliepark"> julie</a> ♡
</footer>
</div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Bad+Script|Titillium+Web' rel='stylesheet' type='text/css'>
<div id="smart-button-container">
      <div style="text-align: center;">
            <div id="paypal-button-container">
                <script src="https://www.paypal.com/sdk/js?client-id=AT6WdzGS4YhY5QWNxVPFpAOldbBnRFUsXauhJ7XgPD2Nyj3lm7HolEQGd0mbvl1sfiL0gyNhRQn308It" data-sdk-integration-source="button-factory"></script>
                <script>
                      function initPayPalButton() {
                        paypal.Buttons({
                          style: {
                            shape: 'pill',
                            color: 'silver',
                            layout: 'horizontal',
                            label: 'paypal',
                            tagline: true
                          },

                          createOrder: function(data, actions) {
                            return actions.order.create({
                              purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
                            });
                          },

                          onApprove: function(data, actions) {
                            return actions.order.capture().then(function(orderData) {

                              // Full available details
                              console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                              // Show a success message within this page, e.g.
                              const element = document.getElementById('paypal-button-container');
                              element.innerHTML = '';
                              element.innerHTML = '<h3>Gracias por su compra.</h3>';

                            });
                          },

                          onError: function(err) {
                            console.log(err);
                          }
                        }).render('#paypal-button-container');
                      }
                      initPayPalButton();
              </script>
            </div>
      </div>
</div>
	</body>
</html>
