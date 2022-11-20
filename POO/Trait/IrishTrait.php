<?php

namespace POO\Trait;

trait IrishTrait{
    public function makeIrish(): string
    {
        return '<p>'.static::class.' fait un irish coffee.</p>';
    }
}