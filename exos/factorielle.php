<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

function factorielle($chiffre)
{
    if ($chiffre > 0) {
        //si le chiffre est > à 0 alors on appel la fonction factorielle avec n-1
        return $chiffre * factorielle($chiffre - 1);
    } else {
        //sinon on renvoi 1
        return 1;
    }
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>factor iel</title>
</head>
<body>

<form action="" method="post">
    <label for="chiffre">Chiffre</label>
    <input type="text" name="chiffre">
    <br>
    <input type="submit" value="envoyer">
</form>

<?php
$chiffre = $_POST['chiffre'] ?? 0;
$chiffre = intval($chiffre);

if ($chiffre > 0) {
    echo factorielle($chiffre);
}
?>

</body>
</html>
