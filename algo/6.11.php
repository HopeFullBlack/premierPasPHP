<?php

$tab1 = [4, 8, 7, 12];
$tab2 = [3, 6];
$schtroupmf = 0;

for ($i = 0; $i < count($tab1); $i++) {
    for ($j = 0; $j < count($tab2); $j++) {
        $schtroupmf += $tab1[$i] * $tab2[$j];
    }
}

echo "le schtroumpf vaut $schtroupmf";