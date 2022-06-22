<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"
            defer></script>
</head>
<body>
<main class="container">
    <h1>Modifier un article</h1>
    <?php

    try {
        require_once 'cnxBdd.php';

        $id = $_POST['id'] ?? false;
        $id = (int)$id;

        if ($id <= 0) {
            throw new Exception('Erreur lors de la récuperation de l\'article (id)');
        }
        //je prépare ma requet1e
        $req = $pdo->prepare('select *  from article where id = :id');
        // je l'execute avec les parametres necessaire
        $req->execute([
            ':id' => $id
        ]);

        $article = $req->fetch(PDO::FETCH_ASSOC) ?? null;

    } catch (Exception $exception) {
        echo '
            <div class="alert alert-dismissible alert-danger">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Erreur!</strong> <a href="#" class="alert-link">Une erreur est survenue : ' . $exception->getMessage() . '
            </a> and try submitting again.
            </div>
            ';
    }

    //on récupere les info du formulaire
    $id = $_POST['id'] ?? false;
    $id = (int)$id;
    $nom = $_POST['nom'] ?? false;
    $nom = htmlspecialchars($nom);
    $poids = $_POST['poids'] ?? false;
    $poids = (float)$poids;
    $prix = $_POST['prix'] ?? false;
    $prix = (float)$prix;

    //on fait qq verif
    if (strlen($nom) > 0 && $poids > 0 && $prix > 0) {

        try {
            require_once 'cnxBdd.php';

            //je prépare ma requete
            $req = $pdo->prepare('update article set nom = :nom, poids = :poids, prix = :prix where id = :id');
            // je l'execute avec les parametres necessaire
            $req->execute([
                ':id' => $id,
                ':nom' => $nom,
                ':poids' => $poids,
                ':prix' => $prix
            ]);

            echo '
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Bravo!</strong> Article modifier avec succès 
              <a href="listArticle.php" class="alert-link"> Voir la liste </a>.
            </div>
            ';

//        } catch (Exception $Exception){
        } catch (PDOException|DomainException $Exception) {
            echo '
            <div class="alert alert-dismissible alert-danger">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Erreur!</strong> <a href="#" class="alert-link">Une erreur est survenue : ' . $Exception->getMessage() . '
            </a> and try submitting again.
            </div>
            ';
        }
    }

    ?>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Le nom du produit"
                   value="<?php echo $article['nom'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Poids</label>
            <input type="text" class="form-control" id="poids" name="poids" placeholder="Le poids du produit"
                   value="<?php echo $article['poids'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prix</label>
            <input type="text" class="form-control" id="prix" name="prix" placeholder="Le prix du produit"
                   value="<?php echo $article['prix'] ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $article['id'] ?>">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>


</main>
</body>
</html>