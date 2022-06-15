<?php
// Détermine si une variable est déclarée et est différente de null et de ""
//if($nombre === 2 || $nombre === 45) // exemple de test if avec "ou"
if (isset($_POST['age']) && $_POST['age'] !== "") {
    $age = intval($_POST['nombre']);
    if ($age > 0) {
        if ($age > 0 && $age < 6) {
            echo "trop jeune";
        } elseif ($age >= 6 && $age <= 7) {
            echo "poussin";
        } elseif ($age >= 8 && $age <= 9) {
            echo "pupille";
        } elseif ($age >= 10 && $age <= 11) {
            echo "minime";
        } elseif ($age >= 12 && $age <= 18) {
            echo "cadet";
        } else {
            echo "Adulte";
        }
//    var_dump($_POST);
    } else {
        echo "l'age doit être > 0";
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
    <title>Formulaire IF</title>
</head>
<body>
<form action="" method="post">
    <label for="nombre">Age de l'enfant
        <input type="number" name="age" placeholder="donner l'age de votre enfant" required>
    </label>
    <button type="submit">Verifier</button>
</form>
</body>
</html>
