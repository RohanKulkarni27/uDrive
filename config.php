<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key" => "sk_test_5xqHmMNbUgpViktCJkDSrAAv",
  "publishable_key" => "pk_test_TNQJxB8xU3SdLAFTqjhVyCCl",
];

\Stripe\Stripe::setApiKey($stripe["secret_key"]);
?>