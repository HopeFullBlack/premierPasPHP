<?php
//header
require_once './inc/header.php';

?>
<section class="container">
    <?php
    if (isset($_SESSION['resultat'])) {
        //si il y a un résultat, je l'affiche
        echo '
                <div class="notification is-' . $_SESSION['resultat']['type'] . '">
                <button class="delete"></button>
                ' . $_SESSION['resultat']['message'] . '
                </div>
                ';
        // je le supprime pour eviter qu'il persiste apres rechargement d'une page
        unset($_SESSION['resultat']);
    }
    ?>
</section>

<?php
//affichage de la page en cours
$page = $_POST['page'] ?? './index.php';

if ($page !== './index.php') {
    require_once $page;
} else {
    //affichage du formulaire d'ajout
    require_once './forms/ajout.html';
    //Affichage de la page
    require_once './inc/actions/todolist.php';
}

//footer
require_once './inc/footer.php';

?>

<div class="modal" id="confirmModal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Confirmation de suppresion</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body has-text-black-bis  ">
      Êtes-vous sure de vouloir supprimer cette tâche?
    </section>
    <footer class="modal-card-foot">
      <button id="deleteBtn" class="button is-success">Oui</button>
      <button class="button is-info">Non</button>
    </footer>
  </div>
</div>