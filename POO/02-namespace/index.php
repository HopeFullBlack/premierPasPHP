<?php

use POO\Namespace\Paypal\Payment as Paypal;
use POO\Namespace\Stripe\Payment as Stripe;
use POO\Namespace\User\User;

require_once 'paypal/Payment.php';
require_once 'stripe/Payment.php';
require_once 'user/User.php';

$paypal = new Paypal();
$stripe = new Stripe();
$user = new User();

var_dump($paypal);
var_dump($stripe);
var_dump($user);
