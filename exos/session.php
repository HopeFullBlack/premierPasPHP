<?php
session_start();
var_dump($_SESSION);
if (isset($_SESSION['prixAtrouve']) && $_SESSION['prixAtrouve'] > 0) {
    $prixAtrouve = (int)$_SESSION['prixAtrouve'];
} else {
    $prixAtrouve = random_int(1, 100);
    $_SESSION['prixAtrouve'] = $prixAtrouve;
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
<form action="" method="post">
    <label for="prix">Prix</label>
    <input type="text" name="prix" id="prix">
    <br>
    <button type="submit">Envoyer</button>
</form>
<?php
$txtPrix = $_POST['prix'] ?? false;
$prix = intval($_POST['prix']);
if ($prix > 0) { // si on a un chiffre valide (form posté)
    if ($prix === $prixAtrouve) {
        echo "ok";
        $prixAtrouve = random_int(1, 100);
        $_SESSION['prixAtrouve'] = $prixAtrouve;*
        //permet de rediriger le visiteur vers l'url
        header('Location: http://localhost/php/PremiersPasPHP/exos/session.php');
        exit;
    } elseif ($prix > $prixAtrouve) {
        echo "plus petit";
    } else {
        echo ' plus grand';
    }
}
?>
</body>
</html>
