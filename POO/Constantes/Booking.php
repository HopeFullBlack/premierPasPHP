<?php

namespace POO\Constantes;

class Booking{

    private const APPROVAL_PENDING = 'En attente';
    const APPROVAL_APPROVED = 'Approuvé';
    const APPROVAL_REJECTED = 'Refusé';

    public function __construct()
    {
        // self fait appel à la classe elle-même, si la class est renomé entre temps, pas besoin de maj le code
        echo self::APPROVAL_PENDING;
    }
}