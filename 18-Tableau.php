<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 13/01/2016
 * Time: 10:23
 */

function readArray($array){
    foreach ($array as $key => $value)
    {
        echo "$key => $value<br>";
    }
}

$maTable = array ("Premiere valeur", 0 => "0");

//pour ajouter un élément
array_push($maTable, 2);   // fonction array_push

$maTable[]="valeur 3";      // ou tab[]=valeur

$maTable[10]="valeur 10";   // ou encore je peux choisir l'indice de la case

readArray($maTable);

//supprimer un element
unset($maTable[10]);

echo'<hr>';

readArray($maTable);
