<?php 

$page_name = "Partenaires";
$page_title = "Nos partenaires";
$meta_description = "Nos partenaires de confiance ainsi que des témoignages";
$meta_keywords = ["Barber's place", "Saint-Lô", "Partenaires", "Témoingnages"];
$css_file = "partenaires.css";
include_once("components/header.inc.php"); 

$partners = [
    ["name" => "Chopper Head", "logo" => "medias/images/partenaires/chopperhead.svg", "link" => "https://www.chopper-head.com/"],
    ["name" => "Eva Professional Hair Care", "logo" => "medias/images/partenaires/eva.jpg   ", "link" => "https://evaprofessional.com/"],
    ["name" => "Philips", "logo" => "medias/images/partenaires/philips.jpg", "link" => "https://www.philips.fr/"],
    // ["name" => "Subtil", "logo" => "medias/images/partenaires/subtil.png", "link" => "https://www.subtil-colorexpert.com/"]
];

$testimonials = [
    ["name" => "Prénom Nom", "enterprise" => "Nom de l'entreprise", "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui quos pariatur nihil architecto ipsa eum? Quod blanditiis, similique numquam temporibus ullam reprehenderit vero cumque voluptatibus. Atque animi, voluptates voluptatem, saepe consectetur totam debitis nemo, quasi consequuntur praesentium eum quod ratione enim culpa doloribus illo nihil quae magnam. Aspernatur, ab error?", "img" => "medias/images/temoignages/temoignage1.jpg"],
    ["name" => "Prénom Nom", "enterprise" => "Nom de l'entreprise", "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui quos pariatur nihil architecto ipsa eum? Quod blanditiis, similique numquam temporibus ullam reprehenderit vero cumque voluptatibus. Atque animi, voluptates voluptatem, saepe consectetur totam debitis nemo, quasi consequuntur praesentium eum quod ratione enim culpa doloribus illo nihil quae magnam. Aspernatur, ab error?", "img" => "medias/images/temoignages/temoignage2.jpg"],
    ["name" => "Prénom Nom", "enterprise" => "Nom de l'entreprise", "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui quos pariatur nihil architecto ipsa eum? Quod blanditiis, similique numquam temporibus ullam reprehenderit vero cumque voluptatibus. Atque animi, voluptates voluptatem, saepe consectetur totam debitis nemo, quasi consequuntur praesentium eum quod ratione enim culpa doloribus illo nihil quae magnam. Aspernatur, ab error?", "img" => "medias/images/temoignages/temoignage3.jpg"],
    ["name" => "Prénom Nom", "enterprise" => "Nom de l'entreprise", "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui quos pariatur nihil architecto ipsa eum? Quod blanditiis, similique numquam temporibus ullam reprehenderit vero cumque voluptatibus. Atque animi, voluptates voluptatem, saepe consectetur totam debitis nemo, quasi consequuntur praesentium eum quod ratione enim culpa doloribus illo nihil quae magnam. Aspernatur, ab error?", "img" => "medias/images/temoignages/temoignage4.jpg"],
    ["name" => "Prénom Nom", "enterprise" => "Nom de l'entreprise", "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui quos pariatur nihil architecto ipsa eum? Quod blanditiis, similique numquam temporibus ullam reprehenderit vero cumque voluptatibus. Atque animi, voluptates voluptatem, saepe consectetur totam debitis nemo, quasi consequuntur praesentium eum quod ratione enim culpa doloribus illo nihil quae magnam. Aspernatur, ab error?", "img" => "medias/images/temoignages/temoignage5.jpg"],
];

$tab = array(

    "Castorama" => array(
        "logo" => "guiehgiuehgg",
        "lien" => "https://Www...."
    )

);

foreach($tab as $nom=>$donnes){
    //....
}

?>

    <main>
        <h1><?= $page_title ?></h1>

        <!-- Section des partenaires -->
        <section id="Partenaires">
            <h2>Nos partenaires</h2>

            <section class="partners-container">
                <?php foreach($partners as $partner): ?>
                <a class="partner" href="<?= $partner['link'] ?>" target="_blank">
                    <img src="<?= $partner['logo'] ?>" alt="Logo de l'entreprise <?= $partner['name'] ?>">
                    <span><?= $partner['name'] ?></span>
                </a>
                <?php endforeach ?>
            </section>

        </section>

        <!-- Section des témoignages -->
        <section id="Temoignages">
            <h2>Les témoignages de nos clients</h2>

            <section class="testimonials-slider">
                <?php foreach($testimonials as $testimonial): ?>
                <div>
                    <img src="<?= $testimonial['img'] ?>" alt="Image de profil de <?= $testimonial['name'] ?>">
                    <div>
                        <p><?= $testimonial['name'] ?></p>
                        <p><?= $testimonial['enterprise'] ?></p>
                        <p><?= $testimonial['content'] ?></p>
                    </div>
                </div>
                <?php endforeach ?>
            </section>


        </section>

    </main>


<?php include_once("components/footer.inc.php"); ?>
