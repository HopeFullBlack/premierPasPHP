<?php
    
    try {
        $pdoMsSQL = new PDO("sqlsrv:Server=DESKTOP-OCH9ERQ;Database=SDBM");

        $statement = $pdoMsSQL->query('select * from ventes');

        $pdoMariaDB = new PDO("mysql:host=localhost;dbname=SDBM;charset=UTF8", "root", "");
       
        $stmt = $pdoMariaDB->prepare(
            'insert into ventes values (
                :ANNEE,
                :NUMERO_TICKET,
                :ID_ARTICLE,
                :QUANTITE
            );'
        );

        while ($article = $statement->fetch()) {
            $stmt->execute([
                'ANNEE' => $article['ANNEE'],
                'NUMERO_TICKET' => $article['NUMERO_TICKET'],
                'ID_ARTICLE' => $article['ID_ARTICLE'],
                'QUANTITE' => $article['QUANTITE']
            ]);
        }
        
        echo"ok";
    } catch (PDOException $PDOException) {
        echo $PDOException->getTraceAsString()."<br />";
        die($PDOException->getMessage());
    }
