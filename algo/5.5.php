<?php

$chiffre = 7;
$res = 0;

for ($i = 1; $i <= $chiffre; $i++) {
    $res += $i;
}

echo "résultat de 1+...+$chiffre = $res";
