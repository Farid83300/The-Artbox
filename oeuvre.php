<?php
// Inclusion du tableau des œuvres
require_once(__DIR__ . '/oeuvres.php');

// Vérifier si l'ID est présent dans l'URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    // Si l'ID est manquant ou non valide, rediriger vers error404.php
    header("Location: /error404.php");
    exit();
}

// Extraire l'ID de l'URL (commence à 1 dans l'index)
$id = (int) $_GET['id'];

// Valider que l'ID est dans les limites du tableau
if ($id < 1 || $id > count($oeuvres)) {
    // Si l'ID est hors limites, rediriger vers error404.php
    header("Location: /error404.php");
    exit();
}

// Récupérer l'œuvre correspondante (ID = position dans le tableau, décalé de -1 pour l'index 0)
$oeuvre = $oeuvres[$id - 1];

// Inclusion du Header
require_once(__DIR__ . '/header.php');
?>
<!-- Page de détail de l'œuvre -->
<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvre["picture"]; ?>" alt="<?php echo $oeuvre["title"]; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre["title"]; ?></h1>
            <p class="description"><?php echo $oeuvre["author"]; ?></p>
            <p class="description-complete"><?php echo $oeuvre["description"]; ?></p>
        </div>
    </article>
</main>
<!-- Inclusion du Footer -->
<?php require_once(__DIR__ . '/footer.php'); ?>