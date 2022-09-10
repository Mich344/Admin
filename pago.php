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
	
<section class="caja">
	
	<div class="contenedor">
	<div class="caja__columna">
		<svg> <rect> </rect> </svg>
		
				<div class="Texto">
			<h2> Información </h2>
			<p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque quam quos vitae. Sed libero et nulla suscipit quae nostrum distinctio corrupti cumque, cum porro accusantium, ullam sit dolores quas nisi!</p>
	
	

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
