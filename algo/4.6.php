<?php

$c1 = 15;
$c2 = 13;
$c3 = 12;
$c4 = 60;

if ($c1 > 50) {
    echo "victoire au premier tour";
} elseif ($c1 < 12.5 or $c2 > 50 or $c3 > 50 or $c4 > 50) {
    echo "défaite au 1er tour";
} elseif ($c1 > $c2 and $c1 > $c3 and $c1 > $c4) {
    echo "ballotage favorable";
} else {
    echo "ballotage défavorable";
}
