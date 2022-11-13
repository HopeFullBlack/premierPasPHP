<?php

namespace POO\Autoloader\Stripe;

class Payment{
    public function __construct(
        public string $type = "Stripe",
    )
    {}
}