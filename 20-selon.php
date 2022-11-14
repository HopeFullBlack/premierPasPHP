<?php

$nombre = 105;

//depuis php 8, le switch a été moderniser, on peut utilsier maintenant la fonction match()
echo match($nombre){
    14,25,36,40=>'ok', 
    42=>'okok', 
    default=>'default'
};

//le selon historique
// switch ($nombre) {
//     case 40:
//         $result = "ok";
//         break;
//     case 42:
//         $result = "okok";
//         break;
//     default:
//         $result = "default";
// }

// echo "résultat : $result";

