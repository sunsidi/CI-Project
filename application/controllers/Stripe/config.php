<?php
require_once('Stripe.php');

$stripe = array(
  "secret_key"      => "sk_live_AJHUFwVnx9aiOOutcEz27HnE",
  "publishable_key" => "pk_live_5ggqGwcspXMWKOape7yW0DTq"
);



Stripe::setApiKey($stripe['secret_key']);
?>