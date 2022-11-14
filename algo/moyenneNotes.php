<?php

$notes = [10, 15, 12, 4, 12, 13, 5, 8, 20, 16, 3, 8, 9];
$total = 0;

foreach($notes as $note){
    $total+=$note;
}

echo 'La moyenne des notes pour ce stagiaire est de : '. round($total / count($notes), 2);