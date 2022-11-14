<?php

/**
 * Created by PhpStorm.
 * User: François
 * Date: 13/01/2016
 * Time: 10:11
 */

//$maTable = array (23, 18, 5.2, '55',"Dupont");

$maTable = [
    23,
    18,
    5.2,
    false,
    '55',
    "Dupont"
];

$maTable2 = [
    'case1' => 23,
    'case2' => 18,
    'case3' => 5.2,
    'caseBooleen' => false,
    'casetxt' => '55',
    'caseNom' => "Dupont"
];

echo count($maTable) . ' éléments dans le tableau';
echo '<br><br>';

//boucle for
for ($i = 0; $i < count($maTable); $i++) {
    echo $maTable[$i] . '<br>';
}

echo '<hr>';
$i=0;
while($i< count($maTable)){     //boucle while
    echo $maTable[$i] . '<br>';
    $i++;
}

echo '<hr>';

foreach ($maTable2 as $cle => $element) {
    echo "item n° $cle = $element<br>";
}

$tabMulti = [
    [1, 2, 3, 4, 5, 6, 7, 8, 9],
    $maTable
];

echo "<hr>" . print_r($tabMulti[1]) . '<hr>';
echo "<hr>" . $tabMulti[0][0] . '<hr>';

foreach ($tabMulti as $tab) {
    foreach ($tab as $key => $value) {
        echo $value;
    }
}
