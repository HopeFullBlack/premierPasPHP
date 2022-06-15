<?php
$prix = null;
if (
    isset($_POST['photocopies']) && // $_POST['photocopies'] existe?
    $_POST['photocopies'] !== "" && // $_POST['photocopies'] !== ""
    intval($_POST['photocopies']) > 0 && // $_POST['photocopies'] > 0
    intval($_POST['photocopies']) <= 100 // $_POST['photocopies'] <= 100
) {
    $nbPhotocopie = intval($_POST['photocopies']);
    $total = 0;
    if ($nbPhotocopie <= 10) {
        $total = $nbPhotocopie * 0.1;
    } elseif ($nbPhotocopie <= 30) {
        $total = 1 + (($nbPhotocopie - 10) * 0.09);
    } else {
        $total = 2.8 + (($nbPhotocopie - 30) * 0.08);
    }
    $prix = "Prix total : $total &euro;";
}
//else {
//    echo "formulaire mal renseigné";
//}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photocopie</title>
</head>
<body>
<form action="" method="post">
    <label for="photocopies">Nombre de photocopie
        <select name="photocopies">
            <option value="" selected>Choisir une valeur</option>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <br>
        <small>(minimum 1, maximum 100)</small>
    </label>
    <br>a
    <button type="submit">Calculer</button>
</form>
<?php
//affiche le contenu de $prix si $prix !== null
echo $prix ?? '';
?>
</body>


</html>
