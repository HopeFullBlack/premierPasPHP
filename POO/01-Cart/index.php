<?php

namespace POO\cart;

require_once 'Cart.php';

$cart = new Cart(1,100);
$cart->discount(5);

var_dump($cart);