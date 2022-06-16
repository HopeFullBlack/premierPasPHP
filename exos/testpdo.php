<?php
//permet d'afficher les erreurs
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$dsn ='mysql:dbname=test;host=localhost;port=3306;charset=utf8';

$user='test';
$pwd ='fvi)EHDk5ya67zgO';

//créer la connexion a la bdd
$pdo = new PDO($dsn, $user, $pwd);
//je prepare une requete
$stmt = $pdo->prepare('select * from article');
//je l'execute
$res = $stmt->execute();

//tant qu'il y a une nouvelle ligne d'article a affiché
while($row = $stmt->fetch()){
    //je l'affiche
    var_dump($row);
}

echo 'ok';

