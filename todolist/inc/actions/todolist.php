<section class="container is-flex p-3">
    <?php
    // connexion à la bdd
    require_once './inc/cnxBdd.php';

    // récupération des todos stockés en bdd, utilisation de la méthode query car pas de paramètre extérieur
    $stmt = $pdo->query('select * from todos');

    //je les stock dans un tableau
    $todos = $stmt->fetchAll();

    //affichage
    foreach ($todos as $todo) {
        //préparation de la date
        $deadline = new DateTime($todo['deadline']);
        // affichage de la tâche
        echo "
    <article>
        <div class='card mr-2 p-2 has-background-grey-dark has-text-light'>
            <div class='card-content'>
                <div class='content'>
                    {$todo['title']} - {$todo['description']} - {$deadline->format('d/m/Y H:i')} 
                </div>
            </div>
            <footer class='card-footer is-justify-content-center pt-2'>
                <form action='./index.php' method='post'>
                    <input type='hidden' name='page' value='./forms/formUpdate.php' method='post'>
                    <input type='hidden' name='updateId' value='{$todo['id']}'>
                    <button type='submit' class='button is-info'>Modifier</button>
                </form>
                <form action='./inc/actions/delete.php' id='delete{$todo['id']}' class='display-none' method='post'>
                    <input type='hidden' name='page' value='./inc/actions/delete'>
                    <input type='hidden' name='deleteId' value='{$todo['id']}'>
                    <button type='submit' class='button is-danger'>Supprimer</button>
                </form>
                <button class='button is-danger js-modal-trigger ml-3' data-target='confirmModal'>
                    Open JS example modal
                </button>
            </footer>
        </div>
    </article>
    ";
    }
    ?>
</section>
