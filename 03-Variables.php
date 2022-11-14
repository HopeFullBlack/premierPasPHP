<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 12/01/2016
 * Time: 12:51
 */

$maVariable = "1"; // type string

echo $maVariable;
echo ' est un '.gettype($maVariable);

$maVariable = $maVariable * 1.1; // type numérique

echo "<hr> $maVariable";
echo ' est un '.gettype($maVariable);

const TOTO = "super prénom";
echo "<hr>ma constante est : ".TOTO;

$nom = 'jean';
echo "<br>$nom est de type ".gettype($nom);


// concaténation avec variable simple
echo "<hr> le prénom est $nom";
echo '<hr> le prénom est ' . $nom;
echo "<hr> le prénom est " . $nom;

// concaténation avec constante 
echo '<hr>ma constante est : '.TOTO;
echo "<hr>ma constante est : ".TOTO;

