<?php
session_start();
//permet d'afficher les erreur
ini_set('display_errors', 'On');
error_reporting(E_ALL);

var_dump($_SESSION['prixAtrouve']);

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>addition</title>
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

    $resultat = 0;
    $txtRes = '';

    for ($i = 1; $i <= $chiffre; $i++) {
        if ($i === $chiffre) {
            $txtRes .= $i . ' = ';
        } else {
            $txtRes .= $i . ' + ';
        }
        $resultat += $chiffre;
    }

    echo $txtRes.$resultat;
}
?>

</body>
</html>
