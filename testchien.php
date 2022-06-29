<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//version objet
require_once 'Chien.php';

$toby = new Chien('Toby',
    'Husky',
    'noir et blanc',
    30.2,
    3,
    'pure race'
);

$sebastchien = new Chien(
    'Sebastchien',
    'bichon',
    'roux',
    25.678,
    10,
    'batard des caniveaux'
);

echo $sebastchien;

$sebastchien->setPoids(3)
    ->setNom('Belle')
    ->setAge(2)
    ->setPedigree('pedigree pal');

$sebastchien->aboyer();

//echo $toby;
echo "<br> apres cure de remise en forme : <br> $sebastchien";

$toby->manger();

/*
 * version procedurale
//nom
//race
//couleur
//poids
//age
//pedigree

$toby = [
    'nom' => 'Toby',
    'race' => 'husky',
    'robe' => 'blanc et noir',
    'poids' => '30kg',
    'age' => '3 ans',
    'pedigree' => 'pure race'
];

$sebastien = [
    'nom' => 'Sebastchien',
    'race' => 'bichon',
    'robe' => 'maltais',
    'poids' => '30kg',
    'age' => '10 ans',
    'pedigree' => 'pure gras'
];

//action
//aboyer
//manger
//dormir
//mordre

function aboyer($chien){
    echo "{$chien['nom']} aboie sur le facteur <br>";
}

function manger($chien){
    echo "{$chien['nom']} mange ses croquettes <br>";
}

function dormir($chien){
    echo "{$chien['nom']} dormir dans son panier <br>";
}

function mordre($chien){
    echo "{$chien['nom']} mord le facteur <br>";
}

//action
aboyer($toby);
manger($sebastien);
dormir($toby);
mordre($sebastien);
*/


