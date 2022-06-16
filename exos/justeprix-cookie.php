<?php
$_COOKIE['prixMasque'] ?? setcookie('prixMasque', random_int(1,100), time()+3600);
var_dump($_COOKIE);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <label for="prix">Prix
        <input type="number" name="prix" placeholder="votre proposition">
    </label>
    <p>
        <small>Valeur comprise entre 1 et 100</small>
    </p>
    <button type="submit">Envoyer</button>
</form>

<?php
$prix = $_POST['prix'] ?? false;
$prix=intval($prix);
if($prix>0){
    $prixMasque = intval($_COOKIE['prixMasque']);
    if($prix === $prixMasque){
        echo 'win<div><form action=""><button type="submit">Recommencer</button></form></div>';
        setcookie('prixMasque', random_int(1,100), time()+3600);
    } elseif ($prix > $prixMasque) {
        echo 'plus bas';
    } else {
        echo 'plus haut';
    }
}
?>

</body>
</html>
