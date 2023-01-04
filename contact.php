<?php
$page_name = "Contact";
$page_title = "Nous contacter";
$meta_description = "Contactez nous si vous avez la moindre question !";
$meta_keywords = ["Barber's place", "Saint-Lô", "Contact", "Coordonées"];
$css_file = "contact.css";
include_once("components/header.inc.php"); 




$options_contact = ["Demande de devis" => "devis", "Offre d'emploi" => "emploi", "Demande de renseignement" => "renseignement", "Autre" => "autre"];

?>

    <main>
        <h1><?= $page_title ?></h1>

        <section class="container-box">
            <section class="container-form">
                <form action="contact.php" method="post">
                    <div class="input-wrapper">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="prenom" minlength="2" maxlength="30" autocomplete="on" required>
                    </div>

                    <div class="input-wrapper">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" minlength="2" maxlength="30" autocomplete="on" required>
                    </div>

                    <div class="input-wrapper">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" autocomplete="on" required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" placeholder="nomprenom@domaine.com">
                    </div>

                    <div class="input-wrapper">
                        <label for="sujet">Sujet</label>
                        <select name="sujet" id="sujet" required>
                            <option value="">-- Choississez un sujet --</option>
                            <?php foreach($options_contact as $name=>$value) : ?>
                            <option value="<?= $value ?>"><?= $name ?></option>    
                            <?php endforeach ?>       
                        </select>
                    </div>

                    <div class="input-wrapper">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" name="telephone" id="telephone" autocomplete="on" required placeholder="06xxxxxxxx" pattern="[0-9]{10}">
                    </div>

                    <div class="input-wrapper">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="5"
                            placeholder="Écrivez nous un petit message..." minlength="10" required></textarea>
                    </div>

                    <input type="reset" value="Effacer">
                    <input type="submit" value="Envoyer">

                </form>
            </section>
            <section class="coordonnees">
                <address>
                    <span>Adresse : <a href="#map" class="highlight-text"><?= $contact_informations['address'] ?></a></span>
                    <span>Email : <a href="mailto:<?= $contact_informations['mail'] ?>" class="highlight-text"><?= $contact_informations['mail'] ?></a></span>
                    <span>Téléphone : <a href="tel:<?= str_replace(' ', '', $contact_informations['phone']) ?>" class="highlight-text"><?= $contact_informations['phone'] ?></a></span>
                </address>
            </section>


            <iframe id="map" title="Barber's place shop" src="https://maps.google.com/maps?q=51%20rue%20de%20l'exode,%2050000%20Saint-l%C3%B4&t=&z=17&ie=UTF8&iwloc=&output=embed"></iframe>
        </section>


    </main>

<?php include_once("components/footer.inc.php"); ?>
