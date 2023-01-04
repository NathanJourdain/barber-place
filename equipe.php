<?php 

$page_name = "Équipe";
$page_title = "Notre équipe";
$meta_description = "Découvrez notre fabuleuse équipe";
$meta_keywords = ["Barber's place", "Saint-Lô", "Salariés", "Equipe"];
$css_file = "equipe.css";
include_once("components/header.inc.php"); 

$team = [
    ["img" => "aurore-min.jpg", "name" => "Aurore Sansouci", "pseudo" => "Aurore", "role" => "Directrice et coiffeuse", "linkedin" => "https://www.linkedin.com"],
    ["img" => "matt-min.jpg", "name" => "Matthieu Lafarge", "pseudo" => "Matt", "role" => "Coiffeur mixte", "linkedin" => "https://www.linkedin.com"],
    ["img" => "bruno-min.jpg", "name" => "Bruno Gour", "pseudo" => "Bruno", "role" => "Spécialiste barbe", "linkedin" => "https://www.linkedin.com"],
    ["img" => "benoit-min.jpg", "name" => "Benoît Gauvin", "pseudo" => "Pseudo", "role" => "Barbier et coiffeur", "linkedin" => "https://www.linkedin.com"],
    ["img" => "elodie-min.jpg", "name" => "Élodie Pelletier", "pseudo" => "Élodie", "role" => "Rôle", "linkedin" => "https://www.linkedin.com"],
    ["img" => "alicio-min.jpg", "name" => "Alicio Alenzo", "pseudo" => "L'italien", "role" => "Barbier", "linkedin" => "https://www.linkedin.com"]
    
// Coiffeur chauve
// Barbier imberbe
]; 

?>
    <main>
        <h1><?= $page_title ?></h1>

        <!-- Sections de l'équipe -->
        <section class="container-box">
            <?php foreach($team as $employee): ?>

                <div class="box">
                    <img src="medias/images/equipe/<?= $employee['img'] ?>" alt="Photo de profil de <?= $employee['name'] ?>">
                    <div>
                        <ul>
                            <li><?= $employee['name'] ?></li>
                            <li><?= $employee['pseudo'] ?></li>
                            <li><?= $employee['role'] ?></li>
                            <li><a href="<?= $employee['linkedin'] ?>" target="_blank"><img src="medias/icons/linkedin-black.svg" alt="Icône linkedin"></a></li>
                        </ul>
                    </div>
                </div>

            <?php endforeach ?>

        </section>

    </main>

<?php include_once("components/footer.inc.php"); ?>