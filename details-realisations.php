<?php 

require_once('data/data-realisations.php');

if(!isset($_GET['id'])){
    header('Location: realisations.php');
}
$id = $_GET['id'];

if(!isset($realisations[$id])){
    header('Location: realisations.php');
}

$realisation = $realisations[$id];

$page_name = "Réalisations";
$page_title = $realisation['title'];
$meta_description = substr($realisation['description'], 0, 100) . "...";
$css_file = "details_realisations.css";
include_once('./components/header.inc.php');
?>


<main>

    <a href="realisations.php" class="highlight-text">Retour aux réalisations</a>

    <h1><?= $realisation['title'] ?></h1>
    <p><?= $realisation['description'] ?></p>

    <section>
        <?php foreach($realisation['images'] as $image): ?>
        <img src="<?= $image ?>" alt="">
        <?php endforeach ?>
    </section>


</main>


<?php include_once('./components/footer.inc.php'); ?>