<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"
            defer></script>
</head>
<body>
<main class="container">
    <h1>Je me connecte</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Courriel</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Le mail du compte" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Le password"
                   required>
        </div>
        <button type="submit" class="btn btn-primary">Créer mon compte</button>
    </form>
    <?php

    try {
        $email = $_POST['email'] ?? null;
        $mdp = $_POST['password'] ?? null;
        $mdp = htmlspecialchars($mdp);

        //je verifie que le mdp n'est pas null et que le mail soit valide
        if (!is_null($mdp) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            require_once 'cnxBdd.php';

            $stmt = $pdo->prepare("select * from User where email = :email");

            if ($stmt->execute([
                ':email' => $email
            ])) {
                //si je trouve mon utilisateur en bdd
                if ($stmt->rowCount() === 1) {
                    // je le lie a ma var $User
                    $user = $stmt->fetch();

                    //mdp identique?
                    if (password_verify($mdp, $user['mdp'])) {
                        session_start();
                        $_SESSION['User'] = $user;
                        var_dump($_SESSION);
                    }
                } else {
                    throw new Exception('erreur avec le mail ou le mdp');
                }
            }
        }
    } catch (PDOException|Exception $Exception) {
        echo '
            <div Class="alert alert-dismissible alert-danger">
              <button type="button" Class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Erreur!</strong> <a href="#" Class="alert-link">Une erreur est survenue : ' . $Exception->getMessage() . '
            </a> and try submitting again.
            </div>
            ';
    }

    ?>
</main>
</body>
</html>




