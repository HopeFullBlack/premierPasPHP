<?php

namespace POO\Heritage;

require_once '../../vendor/autoload.php';

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<header>
    navbar
</header>
<main>

    <?php

    //$cofeeMachine = new CofeeMachine(2);
    //$cofeeMachine->select('espresso');

    $premiumCofeeMachine = new PremiumCofeeMachine(3);
    $premiumCofeeMachine->select('vanilla');
    ?>

</main>
<footer>
    fait par &copy; moi même
</footer>
</body>
</html>

