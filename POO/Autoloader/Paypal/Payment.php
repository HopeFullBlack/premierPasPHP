<?php

namespace POO\Autoloader\Paypal;

use POO\Autoloader\User\User;

class Payment{
    public function __construct(
        public string $type = "Paypal",
        public User $user = new User()
    )
    {}
}