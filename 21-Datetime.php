<?php

// les dates, en php on peut récuperer la date du jour ou créer une date personsaliser

// les formats possible sont disponible sur la doc
// https://www.php.net/manual/fr/datetime.format.php

//création de date format procédurale
// https://www.php.net/manual/en/datetime.format.php
$dateProcedurale = date('d/m/Y');  
$dateTimestamp;
echo "$dateProcedurale <br>";

//création de date format objet
// https://www.php.net/manual/fr/class.datetime.php
$dateDuJour = new DateTime();
$datePersonaliser = new DateTime('10/10/2020 10:10:10');

//affichage
echo $dateDuJour->format('d/m/Y').'<br>'; // date seul
echo $dateDuJour->format('d/m/Y H:i:s').'<br>'; // date et heure

// comparaison de date
// avec le format objet la comparaison se fait comme n'importe qu

