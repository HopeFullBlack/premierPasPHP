<?php

//je me connecte à la bdd
require_once '../exos/cnxBdd.php';

$req = $pdo->query('select * from personne');
$req->execute();

$res = $req->fetchAll();

echo '<pre>' . print_r($res) . '</pre>';

foreach($res as $person){
    echo '<br>Prénom : '.$person['prenom'];
}