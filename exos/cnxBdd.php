<?php
//permet d'afficher les erreurs
ini_set('display_errors', 'On');
error_reporting(E_ALL);

// caracteristique de la connexion
$dsn = 'mysql:dbname=test;host=localhost;port=3306;charset=utf8';

//info de connexion
$user = 'test';     // root
$pwd = 'fvi)EHDk5ya67zgO'; // 

//créer la connexion a la bdd
$pdo = new PDO($dsn, $user, $pwd, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // permet d'activer le mode verbeux pour les erreurs
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC    // lire les enregistrement comme un tableau
]);