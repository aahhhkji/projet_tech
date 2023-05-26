<?php
require_once('functions.php');

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$bdd = connect();

$sql = "SELECT * FROM oeuvre WHERE categories_id = :categories_id";

$sth = $bdd->prepare($sql);

$sth->execute([
    'categories_id' => $_SESSION['user']['id']
]);

$persos = $sth->fetchAll();

?>

<?php require_once('_header.php'); ?>
<?php require_once('barre.php'); ?>

<h1>Bienvenue au musée sensoriel</h1>

<div class="rectangle">
    <h4>A propos de nous</h4>
</div>

<!-- Ajoutez ici le reste de votre contenu HTML -->

<!-- Fermez les balises HTML manquantes -->
</body>
</html>
