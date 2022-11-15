<?php

echo '<pre>' . print_r($_POST) . '</pre>';
if (isset($_POST['nom'])) {
    // verification avant enregistrement
    if ($_POST['nom'] === "")  $nom = "pierre"; //valeur par défaut
    if (strlen($_POST['nom']) > 50) $nomTropLong = true;

    if (!$nomTropLong) {
        
        require_once '../exos/cnxBdd.php';

        //je determine mon modele de requete
        $sql = "insert into personne values(null, :nom, :prenom)";
        // $sql = "insert into personne values(null, ?, ?)";

        $req = $pdo->prepare($sql);
        $res = $req->execute(
            [
                ':prenom' => $_POST['prenom'],
                ':nom' => $_POST['nom'],
            ]
        );

        // $res = $req->execute(
        //     [ $_POST['prenom'], $_POST['nom'] ]
        // );

        echo 'enregistrement effectué avec succès';
    } else {
        echo 'nom trop long';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test formulaire</title>
</head>

<body>
    <h1>mon superbe formulaire</h1>
    <form action="" method="POST">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" maxlength="50" placeholder="nom">
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" placeholder="prénom">
        </div>
        <div><button type="submit">Envoyer</button></div>
    </form>
</body>

</html>