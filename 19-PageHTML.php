<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Page</title>

</head>
<body>
require_once ("19-Parametres.php");
<br>
<?php

    // include ("19-Parametres.php"); // inclut un fichier sans vérifier qu'il existe ou si il a deja état inclut
    // include_once ("19-Parametres.php"); // inclut un fichier sans vérifier qu'il existe mais vérifie deja état inclut
    // require ("19-Parametres.php"); // inclut un fichier en vérifiant qu'il existe mais ne vérifie si il a deja état inclut
    
    require_once ("19-Parametres.php"); // inclut un fichier en vérifiant qu'il existe et si il a deja état inclut
    require_once '19-fonctions.php';

    echo '<h1>';
    direBonjour($monNom,$monPrenom);
    echo '</h1>';
?>
</body>
</html>