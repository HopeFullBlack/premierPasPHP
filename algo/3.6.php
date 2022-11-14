<?php

$age = 110;

if ($age < 6) {
    $resultat = "trop jeune!";
} elseif ($age >= 18) {
    $resultat = "trop vieux!";
} else {
    $resultat = match ($age) {
        6, 7 => "poussin",
        8, 9 => "pupille",
        10, 11 => "minime",
        default => "cadet"
    };
}

echo "$age ans => $resultat";
