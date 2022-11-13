<?php

use POO\Autoloader\Paypal\Payment as Paypal;
use POO\Autoloader\Stripe\Payment as Stripe;
use POO\Autoloader\User\User;

require_once __DIR__.'/../../vendor/autoload.php';

$paypal = new Paypal();
$stripe = new Stripe();
$user = new User();

var_dump($paypal);
var_dump($stripe);
var_dump($user);
