<?php

//le rendu en caisse
$totalPanier = 53;
$monnaie = 100;
$resteArendre = $monnaie - $totalPanier;
$resteArendreCopie= $resteArendre;
$nb10 = 0;
$nb5 = 0;

//billets de 10
while ($resteArendre > 10) {
    $nb10++;
    $resteArendre -= 10;
}

//billet de 5
if($resteArendre>5){
    $nb5=1;
    $resteArendre-=5;
}

//Affichage
echo "pour un panier de $totalPanier € regler avec $monnaie &euro;, la caisse vous rendra $resteArendreCopie &euro; décomposer en $nb10 billet(s) de 10, $nb5 billets de 5 et $resteArendre pièce(s) de 1";