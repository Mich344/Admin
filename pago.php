<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/pagos.css" type="text/css" media="screen" />
  <script src="js/pagos.js"></script>
  <title>Pagos</title>
</head>
<body>

<!-- 
<div class="card" style="width: 18rem;">
  <div class="card-body">
        Es esta tu direccion de envio o desea editarla?
      <address>
            Nombre del comprador <br>
            telefono del comprador <br>
            Email del comprador <br>
            Direccion,Ciudad <br>
      <address>
  </div>
</div> -->
<div id="perspectiva">
  <div id="contenedor">
    <div class="cara frontal">
			<h1>Codepen</h1> 
		</div>
		<div class="cara trasera">
			<div id="abrir"></div>
			<div id="partes"></div>
			<div id="carta">
				<i class="icon-cancel"></i>
				<?xml version="1.0" encoding="utf-8"?>
				<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="30.312px" height="35px" viewBox="0 0 30.312 35" enable-background="new 0 0 30.312 35" xml:space="preserve">
					<g>
						<polygon fill="#E5332A" points="30.312,0 20.208,0 15.156,8.75 20.207,17.5 	"/>
						<polygon fill="#8E1315" points="0,0 10.104,0 20.207,17.5 10.104,17.5 	"/>
						<polygon fill="#8E1315" points="0,35 10.104,35 15.156,26.25 10.104,17.5 	"/>
						<polygon fill="#E5332A" points="30.312,35 20.208,35 10.104,17.5 20.207,17.5 	"/>
					</g>
				</svg>
				<address>
            Nombre del comprador <br>
            telefono del comprador <br>
            Email del comprador <br>
            Direccion,Ciudad <br>
      <address>
			</div>
		</div>
	</div><!-- fin contenedor -->
</div>
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
