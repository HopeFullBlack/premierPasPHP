<?php
var_dump($_COOKIE);
//setcookie('prixMasque', '',time() - 1);   //permet de supprimer un cookie
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
if ($prix > 0) {
    if ($prix === $prixAtrouve) {
        setcookie('prixAtrouve', random_int(1, 100), time() + (60 * 5));
        $resultat = 'win<div><form action=""><button type="submit">Recommencer</button></form></div>';
    } elseif ($prix > $prixAtrouve) {
        $resultat = "Plus bas";
    } else {
        $resultat = "Plus haut ! ";
    }
    echo $resultat;
}
?>

</body>
</html>
