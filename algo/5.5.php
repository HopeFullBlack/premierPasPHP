<?php

$chiffre = 7;
$cumul = 1;

for ($i = 2; $i <= $chiffre; $i++) {
    $cumul += $i;
}

echo "résultat de 1+...+$chiffre = $cumul";
