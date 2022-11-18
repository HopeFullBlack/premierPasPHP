<?php

session_start();
// verification avant enregistrement, si l'info existe, on créer $variable = titre reçu sinon, $variable = ''
$id = intval($_POST['deleteId']) ?? '';

//vérification des données avant enregistrement
if (!is_null($id) && $id > 0) {
    require_once './../cnxBdd.php';

    //je determine mon modele de requete
    $sql = "delete from todos where id = :id";

    $req = $pdo->prepare($sql);
    $res = $req->execute( [':id' => $id] );

    $_SESSION['resultat']['message'] = 'suppression effectué avec succès';
    $_SESSION['resultat']['type'] = 'success';
} else {
    $_SESSION['resultat']['message'] = 'Veuillez vérifier les informations renseignées sur le formulaire';
    $_SESSION['resultat']['type'] = 'danger';
}

header('Location:../../index.php');
