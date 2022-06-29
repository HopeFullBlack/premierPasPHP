<?php

namespace POO;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Article.php';

foreach (Article::getAllArticle() as $article) {
    echo " 
        <div>
            <p>id : {$article->id}</p>
            <p>author : {$article->author}</p>
            <p>price : {$article->title}</p>
            <p>price : {$article->message}</p>
            <p>createdAt : {$article->createdAt}</p>
            <p>image : <img src='{$article->image}' alt=''/></p>
            <p>id : {$article->categorie}</p>
        </div>
        <hr>
    ";

//    $toto = new Article(15,'toto', 'totot', '2022-10-10 00:00:00', '');
//    $toto->register();
}
