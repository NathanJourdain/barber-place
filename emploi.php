<?php 

$page_name = "Emplois";
$page_title = "Nos offres d'emplois";
$meta_description = "Vous cherchez un emploi dans le monde de la coiffure et des barbiers ? Vous êtes au bon endroit !";
$meta_keywords = ["Barber's place", "Saint-Lô", "Jobs", "Barbier", "Coiffeur", "Emplois"];
$css_file = "emploi.css";
include_once("components/header.inc.php"); 


$jobs = [
    "Coiffeur" => ["type" => "CDD 35 heures", "description" => "description des missions", "salary" => "1500€"],
    "Coiffeuse" => ["type" => "CDD 35 heures", "description" => "description des missions", "salary" => "1500€"],
    "Barbier" => ["type" => "CDD 35 heures", "description" => "description des missions", "salary" => "1500€"],
    "Barbière" => ["type" => "CDD 35 heures", "description" => "description des missions", "salary" => "1500€"],
    
]


?>
    <main>
        <h1><?= $page_title ?></h1>

        <section class="container-box">

            <?php foreach($jobs as $job=>$details) : ?>
            <section class="box">
                <h2><?= $job ?></h2>
                <?php foreach($details as $detail) : ?>    
                <p><?= $detail ?></p>    
                <?php endforeach ?>
            </section>
            <?php endforeach ?>
        
        </section>


    </main>


<?php include_once("components/footer.inc.php"); ?>
