<?php
$result = null;
if (
    isset($_POST['age']) &&
    $_POST['age'] !== "" &&
    intval($_POST['age']) > 0 &&
    intval($_POST['age']) <= 100
) {
    $result = 'Résultat : <br>Vous ne payez pas l\'impôt';
    if (
        ($_POST['sexe'] === 'h' && intval($_POST['age']) >= 20) ||
        ($_POST['sexe'] === 'f' && intval($_POST['age']) >= 18 && intval($_POST['age']) <= 35)
    ) {
        $result = 'Résultat : <br>Vous êtes soumis à l\'impôt citoyen(ne), et sachez que nous comptons sur vous!';
    }
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zorglub</title>
</head>
<body>

<form action="" method="post">
    <label for="sexe"> Genre <br>
        Homme <input type="radio" name="sexe" value="h">
        Femme <input type="radio" name="sexe" value="f">
        Autre <input type="radio" name="sexe" value="a">
    </label>
    <br>
    <br>
    <label for="Age">Age
        <input type="number" name="age" placeholder="Votre age" required>
    </label>
    <br>
    <br>
    <button type="submit">Calculer</button>
</form>
<p>
    <?php
    echo $result ?? '';
    ?>
</p>
</body>
</html>
