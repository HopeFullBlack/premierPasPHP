<?php

$age = 50;
$sexe = 'h';

$result = 'Résultat : <br>Vous ne payez pas l\'impôt';
if (
    $sexe === 'h' && $age >= 20 ||
    $sexe === 'f' && $age >= 18 && $age <= 35
) {
    $result = 'Résultat :<br>Vous êtes soumis à l\'impôt citoyen(ne), et sachez que nous comptons sur vous!';
}

echo $result;