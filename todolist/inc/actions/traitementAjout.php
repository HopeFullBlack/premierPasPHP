<?php

session_start();

// verification avant enregistrement, si l'info existe, on créer $variable = titre reçu sinon, $variable = ''
$title = $_POST['title'] ?? ''; 
$description = $_POST['description'] ?? '';  
$deadline = $_POST['deadline'] ?? ''; 

//vérification de la date, on essai de créer une date a partir de la date reçu, si une erreur survient, on passe le flag a false
try {
    $isDeadLineValid = true; // flag
    $dateToCheck = new DateTime($deadline);
    $dayDate = new DateTime();
    
    if ($dateToCheck < $dayDate) {
        $isDeadLineValid = false;
    }
} catch (Exception  $error) {
    $isDeadLineValid = false;
}

//vérification des données avant enregistrement
if (
    !empty($title) && strlen($title) < 50 && 
    !empty($description) && strlen($description) < 150 &&
    !empty($deadline) && $isDeadLineValid
) {
    require_once './../../inc/cnxBdd.php';

    //je determine mon modele de requete
    $sql = "insert into todos values(null, :title, :description, :deadline)";

    $req = $pdo->prepare($sql);
    $res = $req->execute(
        [
            ':title' => $title,
            ':description' => $description,
            ':deadline' => $deadline
        ]
    );

    $_SESSION['resultat']['message'] = 'enregistrement effectué avec succès';
    $_SESSION['resultat']['type'] = 'success';
} else {
    $_SESSION['resultat']['message'] = 'Veuillez vérifier les informations renseignées sur le formulaire';
    $_SESSION['resultat']['type'] = 'danger';
}

header('Location:../../index.php');
