<?php

$page_name = "Réalisations";
$page_title = "Nos réalisations";
$meta_description = "Retrouvez nos plus belles réalisations !";
$meta_keywords = ["Barber's place", "Saint-Lô", "Réalisations"];
$css_file = "realisations.css";
include_once("components/header.inc.php"); 

require_once('data/data-realisations.php');


?>
    <main>
        <h1><?= $page_title ?></h1>

        <!-- Section des réalisations -->
        <section class="container-box">
            
            <?php foreach($realisations as $index=>$realisation) : ?>
            <div class="box">
                <h2><?= $realisation['title'] ?></h2>
                <div class="img" style="background-image: url(<?= $realisation['images'][0] ?>);"></div>
                <p><?= substr($realisation['description'], 0, 200) . "..."; ?></p>
                <a href="details-realisations.php?id=<?= $index ?>">Voir plus</a>
            </div>
            <?php endforeach ?>
           
           
        </section>

    </main>

<?php include_once("components/footer.inc.php"); ?>
