<?php
require_once 'cnxBdd.php';

////Requete simple sans parametre
//$sql = 'select * from article';
//
//foreach ($pdo->query($sql) as $row){
//    echo "<p>
//    id : {$row['id']} <br>
//    nom : {$row['nom']} <br>
//    poids : {$row['poids']} <br>
//    prix : {$row['prix']} <br>
//</p>";
//}

////requete préparer avec parametre
//$sql = 'select * from article where nom = :nom';
//
//$stmt = $pdo->prepare($sql);        //je prépare une requete parametré
//
////j'associe les valeurs a mes parametres
//$stmt->bindValue(':nom', 'Article 1', PDO::PARAM_STR);
//
////j'execute la requete (/!\ je ne récupere pas les données tout de suite
////je regarde si la requete a créer une erreur
//$rst = $stmt->execute();
//
////j'affiche mon résultat (si j'en ai un!)
//if ($rst){
//    //je recupere TOUTES les lignes renvoyé par la bdd et je le range dans un tableau (cf  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC )
//    $data = $stmt->fetchAll();
//
//    //je lis mon résultat
//    foreach ($data as $article) {
//        echo "<p>
//            id : {$article['id']} <br>
//            nom : {$article['nom']} <br>
//            poids : {$article['poids']} <br>
//            prix : {$article['prix']} <br>
//        </p>";
//    }
//}

////requete préparer avec parametre
//$stmt = $pdo->prepare('select * from article where nom = :nom');        //je prépare une requete parametré
//
////j'affiche mon résultat (si j'en ai un!)
//if ($stmt->execute(
//    [':nom'=> 'Article 1']
//)){
//    foreach ($stmt->fetchAll() as $article) {
//        echo "<p>
//            id : {$article['id']} <br>
//            nom : {$article['nom']} <br>
//            poids : {$article['poids']} <br>
//            prix : {$article['prix']} <br>
//        </p>";
//    }
//}
//
//echo 'ok';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test formulaire recherche</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Nom de l'article recherché" required>
        <br>
        <button type="submit">Rechercher</button>
    </div>
</form>

<?php
$nom = $_POST['nom'] ?? false;

if ($nom !== false && $nom !== '') //mon formulaire est posté ?
{
    //je nettoie ma variable
//    $nom = filter_var($nom, FILTER_SANITIZE_ENCODED);
    $nom = htmlspecialchars($nom) ;

    //requete préparer avec parametre
    $sql = "select * from article where nom like :nom";

    $stmt = $pdo->prepare($sql);        //je prépare une requete parametré

    //j'associe les valeurs a mes parametres
    $stmt->bindValue(':nom', "%$nom%", PDO::PARAM_STR);

    //j'execute la requete (/!\ je ne récupere pas les données tout de suite
    //je regarde si la requete a créer une erreur
    $rst = $stmt->execute();

    //j'affiche mon résultat (si j'en ai un!)
    if ($rst) {

        var_dump($stmt->debugDumpParams());

        //je recupere TOUTES les lignes renvoyé par la bdd et je le range dans un tableau (cf  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC )
        $data = $stmt->fetchAll();

        //je lis mon résultat
        foreach ($data as $article) {
            echo "<p> 
            id : {$article['id']} <br>
            nom : {$article['nom']} <br>
            poids : {$article['poids']} <br>
            prix : {$article['prix']} <br>
        </p>";
        }
    }
}
?>

</body>
</html>
