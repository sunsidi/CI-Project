<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Stripe Getting Started Form</title>
 
  <!-- The required Stripe lib -->
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
 
  <!-- jQuery is used only for this example; it isn't required to use Stripe -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 
 
 
  <script type="text/javascript">
    // This identifies your website in the createToken call below
    Stripe.setPublishableKey('pk_test_4PkZgbRXDU8aVuSiTySCgiYW');
 
    var stripeResponseHandler = function(status, response) {
      var $form = $('#payment-form');
 
      if (response.error) {
        // Show the errors on the form
        $form.find('.payment-errors').text(response.error.message);
        $form.find('button').prop('disabled', false);
      } else {
        // token contains id, last4, and card type
        var token = response.id;
        // Insert the token into the form so it gets submitted to the server
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        // and re-submit
        $form.get(0).submit();
      }
    };
 
    jQuery(function($) {
      $('#payment-form').submit(function(e) {
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
  <h1>Transfer $10 with Stripe</h1>
 
  <form action="<?php echo base_url()."stripe_controller/transfer"?>" method="POST">
    <span class="payment-errors"></span>
 
    <div class="form-row">
      <label>
        <span>Account Number</span>
        <input type="text" size="20" name = "AccountNumber"/>
      </label>
    </div>
 
    <div class="form-row">
      <label>
        <span>Routing Number</span>
        <input type="text" size="20" name = "RoutingNumber"/>
      </label>
    </div>
    
    <div class="form-row">
      <label>
        <span>Amount</span>
        <input type="text" size="20" name = "Amount"/>
      </label>
    </div>
 
 
    <button type="submit">Submit Payment</button>
  </form>
</body>
</html>