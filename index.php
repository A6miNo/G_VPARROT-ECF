<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Donner du SEO-->
    <meta name="keywords" content="Garage, automobile, reparation, panne, depannage, entretien, Toulouse, Sud-Ouest, Haute-Garonne">
    <meta name="descritption" content="Garage Automobile V.Parrot propose la réparation l'entretien et le dépannage des véhicules situé sur Toulouse">
    <link rel="shortcut icon" type="image/x-icon" href="../ressources/asset/lib/icone-removebg-preview.png">
    <title><?= $infos['name'] ?></title>
    <!--Liaison avec fichier style-->




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../ressources/css/style-AC.css">
    <link rel="stylesheet" type="text/css" href="../ressources/css/home-style.css">
    <link rel="stylesheet" type="text/css" href="../ressources/css/style-footer.css">

    <script src="https://kit.fontawesome.com/609ebaf712.js" crossorigin="anonymous"></script>

    <?php



    //Connection à la bdd
    require_once('./ressources/views/session.php');
    ?>
</head>






<body>

    <!--Start  header-->
    <?php

    //barre de Navigation
    require_once('./ressources/views/nav.php');
    ?>
    <main class="main-contain">
        <div id="video-background">
            <video autoplay="" muted="" loop="">
                <source src="../ressources/asset/Video/production_id_4488715 (2160p).mp4" type="video/mp4">
            </video>
        </div>

        <div class="content-text">
            <h1 class="title-first"> <?= $infos['name'] ?></h1>
            <div class="description">
                <p>Description de la vidéo</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligeorem ipsum dolor sit amet consectetur adipisicingelit. Eligendi maiores corem ipsum dolor sit amet consectetur adipisicing elit.
                    Eligendi maiores corem ipsum dolor sit amet consectetur adipisicing elit. Eligendi maiores cndi maiores e commodi itaque quaerat amet, ex autem, quod aspernatur, minima ea asperiores. In voluptatum incidunt ea laudantium
                    quia repudiandae rerum.</p>
            </div>

        </div>
        <div class="info-garage">
            <button class="btn btn-contact btn-tel">Téléphone</button>
            <div class="hour">
                <h4>Horaires</h4>
                <ul>
                    <li><?= $time['jour'] ?> : <?= $time['heure_ouverture_am'] ?> - <?= $time['heure_fermeture_am'] ?> / <?= $time['heure_ouverture_pm'] ?> - <?= $time['heure_fermeture_pm'] ?> </li>
                    <li><?= $time['jour'] ?> : <?= $time['heure_ouverture_am'] ?> - <?= $time['heure_fermeture_am'] ?> / <?= $time['heure_ouverture_pm'] ?> - <?= $time['heure_fermeture_pm'] ?> </li>
                    <li>mercredi: </li>
                    <li>jeudi: </li>
                    <li>vendredi: </li>
                    <li>samedi: </li>
                    <li>dimanche: </li>
                </ul>
            </div>
            <button class=" btn btn-contact btn-adr">Adresse</button>
        </div>
        <div class="icon-scroll">
            <a href="#a-propos">
                <img src="/ressources/asset/lib/arrow-drop-down-line.png" alt="Cliquez ici pour accéder à la section">
            </a>
        </div>
    </main>
    <!--Start a propos-->
    <section class="a-propos" id="a-propos">
        <div class="cover-text">
            <h2 class="cover-title"> <?= $infos['name'] ?> </h2>
            <h3> L'expertise de réparation automobile au service de l'humain</h3>
            <p class="cover-introduction">
                Pas de blabla inutile nous trouverons la meilleure solution pour tous les budgets.
                Dotés de plus de 25 ans d'expérience en réparation automobile, nous mettons nos compétences au profit des particuliers et des professionnels de tous secteurs d'activité.
                Que ce soit pour un entretien, pour un changement de pare-brise ou encore pour une pose
                de plaque d'immatriculation, nous mettons tout en œuvre pour vous fournir un résultat
                conforme à vos attentes, et ce, dans les meilleurs délais. Vous pouvez nous contacter
                par téléphone, par mail ou par le biais du formulaire de contact pour
                prendre un rendez-vous ou pour toute demande particulière.</p>
            <a href="page-garage.html#formulaire" class="btn-home btn-road">Contactez-nous</a>
        </div>
        <img src="../ressources/asset/image/photo-a-propos.jpg" class="image-office" alt="photographie de V PARROT dans son garage">
    </section>


    <!--Start services-->
    <section class="grp-service">
        <div class="flux">
            <div class="text-info">
                <h2>Les Services de notre Garage</h2>
                <p>Panne de voiture ? Entretien courant ? Et pourquoi pas un nouveau véhicule ? Nous vous proposons des services adaptées à vos besoins.</p>
            </div>

            <div class="flux service-content">
                <div class="card-service">
                    <img src="../ressources/asset/image/auto-repair-g9ea5d1564_640.jpg" alt="image réparation voiture">
                    <div class="container-texts column">
                        <h3>Réparation</h3>

                        <a href="page-garage.html" class="btn-home btn-road">Prendre RDV</a>
                    </div>
                </div>
                <div class="card-service">
                    <img src="../ressources/asset/image/photo entretien.jpg" alt="image entretien voiture">
                    <div class="container-texts">
                        <h3>Entretien</h3>

                        <a href="page-garage.html" class="btn-home btn-road">Prendre RDV</a>
                    </div>
                </div>
                <div class="card-service">
                    <img src="../ressources/asset/image/pre-owned-vehicles-6893760_1280.jpg" alt="image parc automobile">
                    <div class="container-texts">
                        <h3>Vente de véhicules d'occasion</h3>


                        <a href="catalogue-occasion.html" class="btn-home btn-road">Découvrir</a>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Start où nous trouver-->
    <?php
    require_once('./ressources/views/maps.php');
    ?>


    <!--Start Avis online -->
    <section class="online">
        <div class="flux online-content">
            <button class="btn btn-avis">Laisser un avis</button>
            <h2>Avis des clients</h2>
            <div class="cards-content">
                <div class="avis-content">
                    <h5>1- Hornett</h5>
                    <p>Y a pas à dire. C'est un super garage. Les employés sont efficaces et niveau tarif, ils sont très interessant.</p>
                    <p class="card-icone">
                        <span class="yellowStars">★</span><span class="yellowStars">★</span><span class="yellowStars">★</span><span class="yellowStars">★</span>
                    </p>
                </div>
                <div class="avis-content">
                    <h5>1- Hornett</h5>
                    <p>Y a pas à dire. C'est un super garage. Les employés sont efficaces et niveau tarif, ils sont très interessant.</p>
                    <p class="card-icone">
                        <span class="yellowStars">★</span><span class="yellowStars">★</span><span class="yellowStars">★</span><span class="yellowStars">★</span>
                    </p>
                </div>
            </div>
            <div class="pag-btn">
                <button class="btn btn-slide"> avant</button>
                <button class="btn btn-slide">apres</button>
            </div>

        </div>
    </section>
    <!--Start footer -->
    <?php
    require_once('./ressources/views/footer.php');
    ?>


    <script src="../ressources/js/home.js"> </script>
    <script src="../ressources/js/nav.js"></script>
</body>

</html>