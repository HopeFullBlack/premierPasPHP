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
    $result = null;
    if (
        isset($_POST['chiffre']) &&
        $_POST['chiffre'] !== "" &&
        intval($_POST['chiffre']) > 0 &&
        intval($_POST['chiffre']) <= 10
    ) {
        for($i=1; $i<=10; $i++){
            $resultat = $_POST['chiffre']*$i;
            echo"<p>{$_POST['chiffre']} * $i = $resultat</p>";
        }
    }
    ?>
</div>

</body>
</html>
