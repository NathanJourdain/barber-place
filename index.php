<?php 

// --------
// Informations relatives à la page

// Nom de la page qui se met dans la navigation
$page_name = "Accueil";

// Nom de la page qui se met dans la baslise <title>
$page_title = "Bienvenue";

// Contenu des balises meta pour le SEO
$meta_description = "Bienvenue sur la page d'accueil de Barbers's place à Saint-Lô !";
$meta_keywords = ["Barber's place", "barbier", "coiffeur", "Saint-Lô", "Accueil"];

// Nom du fichier css spécifique à la page
$css_file = "accueil.css";
// --------


include_once("components/header.inc.php"); 

?>

    <main>
        <h1><?= $page_title ?></h1>

        <!-- Slider d'images de présentation-->
        <?php
        
        // Nom de l'image => Description de l'image pour le "alt"
        $images = [
            'salon.jpg' => "Le salon",
            'coupe-barbe-mousse.jpg' => "Barbe couper avec de la mousse",
            'coupe-barbe-ciseau.jpg' => "Barbe tailler au ciseau",
            'coupe-cheveux.jpg' => "Coupe cheveux à la tondeuse",
            'outils.jpg' => "Les outils du barbier",
        ];

        ?>
        <section class="slider">

            <?php 
            $index = 0;
            foreach($images as $image=>$alt){
                echo " <img src=\"medias/images/$image\" alt=\"$alt\" style=\"animation-delay: 0s,". $index*3 ."s;\">";
                $index++;
            }
            ?>

            
        </section>
        
        <!-- Section de présentations -->
        <section class="presentation">
            <h2>Qui sommes nous ?</h2>
            <p>
                Nous sommes le salon de barbier Barber's Place situé à Saint-Lô, constitué d'une petite <a href="equipe.php" class="highlight-text">équipe</a> soudée de 6 personnes.<br>
                Nous sommes là pour vous accueillir dans notre beau salon et vous faire passer un agréable moment en notre compagnie le temps d'une coupe.
            </p>
        </section>
        

        <!-- Section des actualités -->
        <?php

        $news = [
            ['title' => "Actualité numéro 1", "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae provident, porro accusantium reprehenderit repellendus ut illo obcaecati repellat cumque quae veritatis nam eum accusamus beatae eaque, nisi commodi aperiam! Incidunt voluptate minima repudiandae impedit necessitatibus, veniam doloribus! Repellendus doloribus, exercitationem alias dolore expedita maiores et possimus non ad perferendis ipsa!"],
            ['title' => "Actualité numéro 2", "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum laborum perferendis molestiae doloribus molestias sint veniam, dolorem iste soluta adipisci ea quaerat suscipit accusamus quas tempora voluptatibus quis quia nobis."],
            ['title' => "  numéro3", "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum laborum perferendis molestiae doloribus molestias sint veniam, dolorem iste soluta adipisci ea quaerat suscipit accusamus quas tempora voluptatibus quis quia nobis."],
            ['title' => "Actualité numéro 4", "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum laborum perferendis molestiae doloribus molestias sint veniam, dolorem iste soluta adipisci ea quaerat suscipit accusamus quas tempora voluptatibus quis quia nobis."],
        ];


        ?>
        <section class="actualites">
            <h2>Les dernières actualités</h2>
            <section class="actualites-container">
                <?php foreach($news as $new): ?>
                    <div>
                        <h3><?= $new['title'] ?></h3>
                        <p><?= $new['content'] ?></p>
                    </div>
                <?php endforeach ?>
            </section>
            <p>Passez la souris au dessus du slider pour arrêter</p>
        </section>

    </main>

<?php include_once("components/footer.inc.php"); ?>
