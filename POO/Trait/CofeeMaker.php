<?php

namespace POO\Trait;

abstract class CofeeMaker
{
    public function makeCoffee(): string
    {
        return '<p>'.static::class.' fait un café .</p>';
    }
}
