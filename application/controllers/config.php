<?php
require_once('Stripe.php');

$stripe = array(
  //"secret_key"      => "sk_live_AJHUFwVnx9aiOOutcEz27HnE",
  //"publishable_key" => "pk_live_5ggqGwcspXMWKOape7yW0DTq"
  "secret_key"      => "sk_test_5nhXB2o5OOktfe6ywQdZflSW",
"publishable_key" => "pk_test_vb73aZ9B2HmQtnyBoPaCNyTK"
);



Stripe::setApiKey($stripe['secret_key']);
?>