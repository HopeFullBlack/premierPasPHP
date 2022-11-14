<?php

// $nombre = -5;

// //le if classique
// if ($nombre > 0) {
//     echo "$nombre est positif !";
// } else {
//     echo "$nombre est negatif !";
// }

// // le if raccourci
// if ($nombre > 0) echo "$nombre est positif !";
// else echo "$nombre est negatif !";

// //la version ternaire
// echo ($nombre > 0) ? "$nombre est positif !" : "$nombre est negatif !";

$nombre = 5;
//version elseif
// if ($nombre > 0) {
//     echo "$nombre est positif !";
// } elseif ($nombre === 0) {
//     echo "$nombre est nul !";
// } else {
//     echo "$nombre est negatif !";
// }

//version si imbriqué
if ($nombre > 0) {
    echo "$nombre est positif !";
} else {
    if ($nombre === 0) {
        echo "$nombre est nul !";
    } else {
        echo "$nombre est negatif !";
    }
}
