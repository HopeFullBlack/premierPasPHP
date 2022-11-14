<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 13/01/2016
 * Time: 08:39
 */

affiche();

function affiche()
{
    echo additionne(1,5).'<br>';
    echo additionne(5,5).'<br>';
}

function additionne($a,$b)
{
    return $a+$b;
}

