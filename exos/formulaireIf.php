<?php
// Détermine si une variable est déclarée et est différente de null et de ""
//if($nombre === 2 || $nombre === 45) // exemple de test if avec "ou"
// if (isset($_POST['age']) && $_POST['age'] !== "") {
//     $age = intval($_POST['nombre']);
//     if ($age > 0) {
//         if ($age > 0 && $age < 6) {
//             echo "trop jeune";
//         } elseif ($age >= 6 && $age <= 7) {
//             echo "poussin";
//         } elseif ($age >= 8 && $age <= 9) {
//             echo "pupille";
//         } elseif ($age >= 10 && $age <= 11) {
//             echo "minime";
//         } elseif ($age >= 12 && $age <= 18) {
//             echo "cadet";
//         } else {
//             echo "Adulte";
//         }
// //    var_dump($_POST);
//     } else {
//         echo "l'age doit être > 0";
//     }
// }

if (isset($_POST['age'])){  //si le formulaire est posté
    //si on ne recupére d'age numerique, alors on met 0
    $age = intval($_POST['age']) ?? 0;
    // vérifie que l'âge est valide
    if ($age > 5 && $age < 18) {
        echo match ($age) {
            6, 7 => "poussin",
            8, 9 => "pupille",
            10, 11 => "minime",
            default => "cadet"
        };
    } else {
        echo "l'age doit être > 5 et < 18";
    }
}
    
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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