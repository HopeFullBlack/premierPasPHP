<?php

session_start();

// verification avant enregistrement, si l'info existe, on créer $variable = titre reçu sinon, $variable = ''
$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';
$deadline = $_POST['deadline'] ?? '';
$id = intval($_POST['updateId']); // recupére l'id

//vérification de la date, on essai de créer une date a partir de la date reçu, si une erreur survient, on passe le flag a false
try {
    $isDeadLineValid = true; // flag
    $dateToCheck = new DateTime($deadline);
    $dayDate = new DateTime();

    if ($dateToCheck < $dayDate) {
        $isDeadLineValid = false;
    }
} catch (Exception  $error) {
    // die(var_dump($error));
    $isDeadLineValid = false;
}

//vérification des données avant enregistrement
if (
    !is_null($title) && strlen($title) < 50 &&
    !is_null($description) && strlen($description) < 150 &&
    !is_null($deadline) && $isDeadLineValid &&
    $id > 0
) {
    require_once './../../inc/cnxBdd.php';

    //je determine mon modele de requete
    $sql = "update todos set title = :title, description = :description, deadline = :deadline where id = :id";

    $req = $pdo->prepare($sql);
    $res = $req->execute(
        [
            ':title' => $title,
            ':description' => $description,
            ':deadline' => $deadline,
            ':id' => $id
        ]
    );

    $_SESSION['resultat']['message'] = 'Mise à jour effectuée avec succès';
    $_SESSION['resultat']['type'] = 'success';
} else {
    $_SESSION['resultat']['message'] = 'Veuillez vérifier les informations renseignées sur le formulaire';
    $_SESSION['resultat']['type'] = 'danger';
}

header('Location:../../index.php');
