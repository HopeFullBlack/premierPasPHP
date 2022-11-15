<?php

$max = 0;

for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 8; $j++) {
        $arr[$i][$j] = mt_rand(1,50); //remplissage tableau
        //affichage pour controle visuel
        echo ($i === 11 && $j ===7 ) ? $arr[$i][$j] : $arr[$i][$j] . ' | ' ;
        // nouvelle valeur max a retenir?
        if ( $arr[$i][$j] > $max) $max = $arr[$i][$j];
    }
    echo'<br>';
}

//resultat
echo "<hr>la valeur max du tableau est $max";

$max = 0;

foreach($arr as $tab){
    if (max($tab) > $max){
        $max = max($tab);
    }
}
echo "<hr>la valeur max du tableau est $max";

//autre methode pour trouver la valeur maximum sur un tableau a simple dimension
$simpleArray = [4, 8, 7, 9, 1, 5, 4, 6];
echo '<hr>la valeur max du tableau simple est '.max($simpleArray);
