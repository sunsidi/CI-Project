<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script type="text/javascript">
            
            
            // This identifies your website in the createToken call below
        
            Stripe.setPublishableKey('pk_test_4PkZgbRXDU8aVuSiTySCgiYW');

            
            
            function stripeResponseHandler(status, response)
            {
                var $form = $('#payment-form');

                if (response.error) {
                    // Show the errors on the form
                    $form.find('.payment-errors').text(response.error.message);
                    $form.find('button').prop('disabled', false);
                }
                else {
                    // response contains id and card, which contains additional card details
                    var token = response.id;
                    // Insert the token into the form so it gets submitted to the server
                    $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                    // and submit
                    $form.get(0).submit();
                }
            };
            
            
            
            jQuery(function($) {
                
                      $('#payment-form').submit(function(event) {
                      var $form = $(this);

                      // Disable the submit button to prevent repeated clicks
                      $form.find('button').prop('disabled', true);
    
                      Stripe.card.createToken($form, stripeResponseHandler);

                    // Prevent the form from submitting with the default action
                    return false;
                });
            });
        </script>
</head>
<body>

<form action="<?php echo base_url().'stripe_controller/charge'?>" method="POST" id="payment-form">
       
        <span class="payment-errors"></span>
	
	<div class="form-row">
                <label>
                        <span>Amount:</span>
                        <input type="text" size="20" data-stripe="number" name="amount" />
                </label>
        </div>
	<br />
        <div class="form-row">
                <label>
                        <span>Card Number</span>
                        <input type="text" size="20" data-stripe="number" name="card" />
                </label>
        </div>

        <div class="form-row">
                <label>
                        <span>CVC</span>
                        <input type="text" size="4" data-stripe="cvc" name = "cvc" />
                </label>
        </div>

        <div class="form-row">
                <label>
                        <span>Expiration (MM/YYYY)</span>
                        <input type="text" size="2" data-stripe="exp-month" name = "exp-month"/>
                </label>
                <span> / </span>
        <input type="text" size="4" data-stripe="exp-year" name="exp-year"/>
        </div>

        <button type="submit">Submit Payment</button>
</form>
<!----------------
<form action="<?php echo base_url().'stripe_controller/charge'?>" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_4PkZgbRXDU8aVuSiTySCgiYW"
    data-amount="10000"
    data-name="Demo Site"
    data-description="2 widgets ($20.00)"
    data-image="">
  </script>
</form>

</body>
------->
</html>
