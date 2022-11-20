<?php

namespace POO\Trait;

use POO\Trait\EspressoMaker;
use POO\Trait\IrishMaker;

require_once '../../vendor/autoload.php';

$espresso = new EspressoMaker();
$irish = new IrishMaker();
$multiCoffeeMaker = new MultiCoffeeMaker();

dump(
    $espresso->makeEspresso(),
    $irish->makeIrish(),
    $multiCoffeeMaker->makeCoffee(),
    $multiCoffeeMaker->makeEspresso(),
    $multiCoffeeMaker->makeIrish()
);
