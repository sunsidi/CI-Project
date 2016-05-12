<?php
  require_once(dirname(__FILE__) . '/config.php');

  $token  = $_POST['stripeToken'];

  $customer = Stripe_Customer::create(array(
      'email' => 'customer@example.com',
      'card'  => $token
  ));

  $charge = Stripe_Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 10000,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged'.$amount/100 .'!</h1>';
?>