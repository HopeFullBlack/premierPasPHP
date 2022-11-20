<?php

require_once './../../vendor/autoload.php';

use POO\Abstract\BMW;
use POO\Abstract\Peugeot;

$bm = new BMW();
echo $bm->rouler();


$peujo = new Peugeot();
echo $peujo->rouler();