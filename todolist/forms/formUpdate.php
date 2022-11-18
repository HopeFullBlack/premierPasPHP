<?php
require_once './inc/cnxBdd.php';
try {
    $id = intval($_POST['updateId']); // recupére l'id
    $stmt = $pdo->prepare('select * from todos where id = :id'); // requete avec parametre extérieur, je passe par la méthode prepare
    $stmt->execute(['id' => $id]); // execution de la requete
    $todo = $stmt->fetch(); // récuperation de la tâche à mettre à jour
    $deadline = new DateTime($todo['deadline']);
} catch (PDOException $error) {
    die(var_dump($error)); // en mode dev, j'affiche l'erreur (a modifier si mise en prod)
}
?>
<section class="container">
    <form action="./inc/actions/doUpdate.php" method="post">
        <div class="field">
            <label class="label">Titre</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Titre de la tâche" maxlength="50" required value="<?php echo $todo['title'] ?>">
            </div>
            <p class="help">Maximum 50 caractères</p>
        </div>
        <div class="field">
            <label class="label">Description de la tâche</label>
            <div class="control">
                <input class="input" type="text" name="description" placeholder="Description de la tâche" maxlength="150" required value="<?php echo $todo['description'] ?>">
            </div>
            <p class="help">Maximum 150 caractères</p>
        </div>
        <div class="field">
            <label class="label">Date de fin</label>
            <div class="control">
                <input class="input" type="datetime-local" name="deadline" placeholder="date butoir" value="<?php echo $deadline->format('Y-m-d h:i:s') ?>" required>
            </div>
            <p class="help">La date doit être valable et dans le futur</p>
        </div>
        <input type="hidden" name="updateId" value="<?php echo $todo['id'] ?>">
        <div class="control">
            <button type="submit" class="button is-primary">Modifier</button>
        </div>
    </form>
</section>