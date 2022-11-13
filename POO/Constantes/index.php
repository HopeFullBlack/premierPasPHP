<?php

namespace POO\Constantes;

require_once '../../vendor/autoload.php';

$status = 'Refusé';

if($status===Booking::APPROVAL_REJECTED) echo 'Réservation refusé';
