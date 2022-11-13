<?php

namespace POO\Namespace\Autoloader;

class Payment{
    public function __construct(
        public string $type = "Stripe",
    )
    {}
}