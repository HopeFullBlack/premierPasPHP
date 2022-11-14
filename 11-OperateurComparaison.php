<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 12/01/2016
 * Time: 14:08
 */
$a = 1;
$b = "1";


if ($a === $b) echo '$a et $b sont identiques';
else
{
    if ($a == $b) echo '$a et $b sont égaux';
    else echo '$a et $b sont différents';
}


$c = 4;
$d = 8;

//la différence
if ($c!==$d) echo "<hr>\$c et différent de \$d";
if ($c!==$d) echo '<hr>$c et différent de $d';
