<?php

namespace POO\Trait; 

trait EspressoTrait{
    public function makeEspresso(): string
    {
        return '<p>'.static::class.' fait un espresso .</p>';
    }
}