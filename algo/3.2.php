<?php

$a = 5;
$b = 4;

//sans 0
if ($a > 0 && $b > 0 or $a < 0 && $b < 0) {
    echo "résultat $a * $b sera positif";
} else {
    echo "résultat $a * $b sera négatif";
}

echo '<hr>';

//ternaire
echo ($a > 0 and $b > 0  or $a < 0 and $b < 0) ? "résultat $a * $b sera positif" : "résultat $a * $b sera négatif";

echo '<hr>';

//Avec 0
if ($a > 0 && $b > 0 || $a < 0 && $b < 0) {
    echo "résultat $a * $b sera positif";
} else {
    if ($a === 0 || $b === 0)  echo "résultat $a * $b sera nul";
    else echo "résultat $a * $b sera négatif";
}

echo '<hr>';
if ($a > 0 && $b > 0 or $a < 0 && $b < 0) echo "résultat $a * $b sera positif";
else if ($a === 0 || $b === 0) echo "résultat $a * $b sera nul";
else echo "résultat $a * $b sera négatif";
