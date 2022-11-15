<?php

$tab1 = [4, 8, 7, 9, 1, 5, 4, 6];
$tab2 = [7, 6, 5, 2, 1, 3, 7, 4];

for ($i = 0; $i < count($tab1); $i++) {
    $tab3[] = $tab1[$i] + $tab2[$i];
    // si je ne suis pas au dernier tour, j'affiche le total + un |, sinon juste le résultat
    echo ($i !== count($tab1) - 1) ? $tab3[$i] . ' | ' : $tab3[$i];
}
