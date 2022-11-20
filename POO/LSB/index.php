<?php

use POO\LSB\ChildClass;
use POO\LSB\ParentClass;

require_once './../../vendor/autoload.php';

$parent = new ParentClass();
$child = new ChildClass();
//
//echo $parent->getName();
//echo $child->getName();

//Static version
echo ParentClass::getName();
echo ChildClass::getName();

//factory
dump($parent->factory());
dump($parent->factory());
dump($parent->factory());

dump($child->factory());
dump($child->factory());
dump($child->factory());