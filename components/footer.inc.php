<?php

$contact_informations = [
    "address" => "51 rue de l'exode, 50000 Saint-lô",
    "phone" => "02 33 00 00 00",
    "mail" => "barberspalce.saintlo@gmail.com",
];

$year = date("Y");

?>


<footer>
        <div>
            &copy; Copyright Barber's place <?= $year ?>
        </div>

        <div>
            <ul>
            <?php foreach($tabs as $tab): ?>
                <li><?= $tab['name'] ?></li>    
            <?php endforeach ?>
            </ul>
        </div>

        <div>
            <address>
                <span>Adresse : <?= $contact_informations['address'] ?></span>
                <span>Téléphone : <?= $contact_informations['phone'] ?></span>
                <span>E-mail : <?= $contact_informations['mail'] ?></span>
            </address>
        </div>

        <div>
            <ul>
                <li><img src="./medias/icons/twitter.svg" alt="Twitter"></li>
                <li><img src="./medias/icons/facebook.svg" alt="Facebook"></li>
                <li><img src="./medias/icons/instagram.svg" alt="Instagram"></li>
                <li><img src="./medias/icons/linkedin.svg" alt="LinkedIn"></li>
            </ul>
        </div>

    </footer>

</body>

</html>