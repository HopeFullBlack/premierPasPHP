<?php

namespace POO\LSB;

class ParentClass
{
//    protected string $name = 'ParentClass';
    protected static string $name = 'ParentClass';

//    public function getName(): string
    public static function getName(): string
    {
//        return "<p>{$this->name}</p>";
        return '<p>'.static::$name.'</p>';
    }

    public function factory(): self
    {
        return new static;
    }
}
