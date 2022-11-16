<?php
session_start();
if(isset($_SESSION['resulat'])){
    echo '<p>'.$_SESSION['resulat'].'</p>';
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
    <form action="./traitementAjout.php" method="POST">
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