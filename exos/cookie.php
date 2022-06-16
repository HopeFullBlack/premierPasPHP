<?php
var_dump($_COOKIE);
if ($_COOKIE['prixAtrouve']) {
    $prixAtrouve = (int)$_COOKIE['prixAtrouve'];
} else {
    $prixAtrouve = random_int(1, 100);
    //je créer un cookie avec la prix a trouvé, le cookkie sera valide pour une durée de 5 minutes
    setcookie('prixAtrouve', $prixAtrouve, time() + (60 * 5));
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cookie</title>
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
$prix = (int)$txtPrix; // identique à $prix = intval($txtPrix);
if ($prix === $prixAtrouve) {
    $resultat = "trouvé";
} elseif ($prix > $prixAtrouve) {
    $resultat = "Plus bas";
} else {
    $resultat = "Plus haut ! ";
}
echo $resultat;
?>

</body>
</html>
