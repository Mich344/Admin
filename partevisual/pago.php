<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pago</title>
	    <link rel="stylesheet" href="css./pagos.css"> 
</head>
<body>
    <div class="card"
      <div class="imgBox"></div>
	<img src="upload./zap6.png" alt="shoe">
<!-- 	LLAMAR IMAGEN SELECCIONADA EN EL CARRITO -->
      <div class="details"></div>
	<div class="title">
		<h3> Tu producto <br>
			<small>loremp jhrf qreb </small>
		</h3>
	      <div class="description"></div>
	      <div class="size"></div>
	      <div class="buy"></div>
      
      
      
      

    </div>

 <!-- Paypal Pay Option -->
<!-- <div id="PayPal">
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
</div> -->
 <!-- End Paypal Pay Option -->


    
</body>
</html>