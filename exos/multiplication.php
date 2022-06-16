<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplication</title>
</head>
<body>
<form action="" method="post">
    <label for="chiffre">
        Chiffre
        <select name="chiffre" id="chiffre">
            <option value="" selected>Choisir un chiffre</option>
            <?php
                for ($i = 0; $i <= 10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
    </label>
    <div>
        <input type="submit" value="Calculer">
    </div>
</form>

<div>
    <?php
        //si $_POST['chiffre'] existe alors $postChiffre prend la valeur de $_POST['chiffre']
        $postChiffre = $_POST['chiffre'] ?? false;
        $chiffre = intval($postChiffre);        //$chiffre correspond à $postChiffre convertit en entier
        if ($chiffre > 0 && $chiffre <= 10) {      //si chiffre compris entre 1 et 10
            for ($i = 1; $i <= 10; $i++) {      //on affiche sa table de multiplication
                $resultat = $chiffre * $i;
                echo "<p>$chiffre * $i = $resultat</p>";
            }
        }
    ?>
</div>

</body>
</html>
