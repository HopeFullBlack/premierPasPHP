<?php

session_start();

echo '<pre>' . print_r($_POST) . '</pre>';
if (isset($_POST['nom'])) {
    // verification avant enregistrement
    $nomTropLong = false;
    if ($_POST['nom'] === "")  $nom = "pierre"; //valeur par défaut
    if (strlen($_POST['nom']) > 50) $nomTropLong = true;

    if (!$nomTropLong) {

        require_once '../exos/cnxBdd.php';

        //je determine mon modele de requete
        $sql = "insert into personne values(null, :nom, :prenom)";
        // $sql = "insert into personne values(null, :nom, ?)"; // ne marchera pas
        // $sql = "insert into personne values(null, ?, ?)";

        // $prenom = $_POST['prenom'] ?? false;
        // if(strlen($prenom)<50)

        $req = $pdo->prepare($sql);
        // $req->bindParam(':nom', $_POST['nom'],PDO::PARAM_STR);
        $res = $req->execute(
            [
                ':prenom' => $_POST['prenom'],
                ':nom' => $_POST['nom'],
            ]
        );

        var_dump($req->debugDumpParams());

        // $res = $req->execute(
        //     [ $_POST['prenom'], $_POST['nom'] ]
        // );

        $_SESSION['resulat'] = 'enregistrement effectué avec succès';
    } else {
        $_SESSION['resulat'] =  'nom trop long';
    }
}

header('Location:ajout.php');
