<!-- Inclusion du Header -->
<?php require_once(__DIR__ . '/header.php'); ?>
<!-- Inclusion du tableau des oeuvres -->
<?php require_once(__DIR__ . '/oeuvres.php'); ?>
<!-- Vignettes de toutes les oeuvres -->
<main>
    <div id="liste-oeuvres">
        <?php 
        $index = 1; // Initialisation de l'index à 1
        foreach ($oeuvres as $oeuvre) : ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $index; ?>">
                    <img src="<?php echo $oeuvre["picture"]; ?>" alt="<?php echo $oeuvre["title"]; ?>">
                    <h2><?php echo $oeuvre["title"]; ?></h2>
                    <p class="description"><?php echo $oeuvre["author"]; ?></p>
                </a>
            </article>
        <?php 
        $index++; // Incrémentation de l'index
        endforeach; ?>
    </div>
</main>
<!-- Inclusion du Footer -->
<?php require_once(__DIR__ . '/footer.php'); ?>