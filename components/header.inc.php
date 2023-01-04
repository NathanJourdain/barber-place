<?php


$contact_informations = [
    "address" => "51 rue de l'exode, 50000 Saint-lô",
    "phone" => "02 33 00 00 00",
    "mail" => "barberspalce.saintlo@gmail.com",
];

$tabs = [
    ["name" => "Accueil", "link" => "index.php"],
    ["name" => "Équipe", "link" => "equipe.php"],
    ["name" => "Réalisations", "link" => "realisations.php"],
    ["name" => "Partenaires", "link" => "partenaires.php", "sub-links" => [ 
        ["name" => "Liste des partenaires", "link" => "partenaires.php#Partenaires"],
        ["name" => "Témoignages", "link" => "partenaires.php#Temoignages"]
    ]],
    ["name" => "Tarifs", "link" => "tarifs.php", "sub-links" => [ 
        ["name" => "Barbe", "link" => "tarifs.php#rasage"],
        ["name" => "Coupe homme", "link" => "tarifs.php#coupe-homme"]
    ]],
    ["name" => "Emplois", "link" => "emploi.php"],
    ["name" => "Contact", "link" => "contact.php"],    
];



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Titre de la page -->
    <title><?= $page_title ?> | Barbers's place</title>

    <!-- SEO -->
    <meta name="author" content="Nathan Jourdain">
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="keywords" content="<?= isset($meta_keywords) ? join(",", $meta_keywords) : "" ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">

    <!-- Style global -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Style spécifique -->
    <link rel="stylesheet" href="css/<?= $css_file?>">
</head>
<body>

    <header>
        <div>
            <img src="medias/images/logo.png" alt="Logo barber's place">
        </div>
        
        <nav>
            <ul>
                <?php foreach($tabs as $tab){
                    // Génération des classes pour les onglets
                    $class = $tab['name'] === $page_name ? "link active" : "link";
                    $class = isset($tab['sub-links']) ? $class." sub-menu": $class;

                    echo "<li class=\"{$class}\"><a href=\"{$tab['link']}\">{$tab['name']}</a>";

                    // Génération du sous menu si il y en a un
                    if(isset($tab['sub-links'])){
                        echo "<ul>";
                        foreach($tab['sub-links'] as $sub_link){
                            echo "<li><a href=\"{$sub_link['link']}\">{$sub_link['name']}</a>";
                        }
                        echo "</ul>";
                    }

                    echo "</li>";
                }
                ?>
            </ul>
        </nav>

    </header>
        