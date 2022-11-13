<?php

namespace POO\Namespace\Autoloader\Paypal;

use POO\Namespace\User\User;

class Payment{
    public function __construct(
        public string $type = "Paypal",
        public User $user = new User()
    )
    {}
}