<div>
       Es esta tu direccion de envio o desea editarla?
      <address>
            Nombre del comprador
            telefono del comprador
            Email del comprador
            Direccion,Ciudad
      <address>
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
