<?php

$page_name = "Tarifs";
$page_title = "Liste de nos tarifs";
$meta_description = "Retrouvez tout les tarifs de nos prestations en détail.";
$meta_keywords = ["Barber's place", "Saint-Lô", "Tarifs", "Prix", "Coupes"];
$css_file = "tarifs.css";
include_once("components/header.inc.php");


$prices = [
    ["id" => "rasage", "name" => "Barbe", "img" => "medias/images/coupe-barbe-ciseau.jpg", "infos" => [
        ["Rasage à l'ancienne", "Rasage classique traditionnel au coupe choux", "35€"],
        ["Rasage crâne tondeuse", "Utilisation d'un seul sabot pour raser le crâne", "15€"],
        ["Rasage crâne coupe choux", "Rasage du crâne au rasoir droit traditionnel service de serviette chaude", "40€"],
        ["Rasage à blanc", "Pour les imberbes", "5€"]
    ]],
    ["id" => "coupe-homme", "name" => "Coupes homme", "img" => "medias/images/coupe-homme-min.jpg", "infos" => [
        ["Shampoing coupe coiffage", "Coupe classique Homme, coupe rétro, pompadour, slicked back, undercut, etc…", "35€"],
        ["Coupe brosse", "Coupe millitaire (Flat Top)", "35€"],
        ["Coupe couronne ", "Coupe Papy contour du crâne", "18€"],
        ["Coupe coiffage -15ans", "Pour les enfants", "14€"],
        ["Coupe chauve", "Pour les chauves", "5€"]
    ]]
];


?>
<main>
    <h1><?= $page_title ?></h1>
    <section class="container-box">

        <?php foreach ($prices as $category) : ?>
            <section class="box" id="<?= $category['id'] ?>">
                <div>
                    <h2><?= $category['name'] ?></h2>
                    <img src="<?= $category['img'] ?>" alt="Photo de présentation de la catégorie <?= $category['name'] ?>" />
                </div>

                <table>
                    <?php foreach ($category['infos'] as $info) : ?>
                        <tr>
                            <?php foreach ($info as $value) : ?>
                                <td><?= $value ?></td>
                            <?php endforeach ?>
                        </tr>
                    <?php endforeach ?>
                </table>
            </section>
        <?php endforeach ?>




    </section>
</main>

<?php include_once("components/footer.inc.php"); ?>