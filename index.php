<?php
require_once('contact.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Développeur web junior | Bilal Belmehdi </title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css-compiled/global.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
</head>

<body id="top_page">
<header role="banner" class="main-header" id="header">
    <nav class="navbar navbar-expand-lg bg-default ">
        <a class="navbar-brand text-uppercase" href="#top_page">Bilal Belmehdi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            Menu
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#about">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#skill">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#realisation">Réalisation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<?php if (!empty($success)) { ?>
    <article>
        <p class="text-center text-uppercase "><?php echo $success; ?></p>
    </article>
<?php } ?>

<section class="container nav-is-stuck " id="profilArea">
    <div class="row justify-content-center">
        <div class="text-center ">
            <img src="img/moi.jpg" alt="Profil picutre" class="profilPict rounded-circle">
            <h1 class="header-master">Bilal Belmehdi</h1>
            <p class="header-slave"><strong>Développeur web junior</strong></p>
        </div>
    </div>
</section>

<section class="container" id="about">
    <h2 class="portfolio-title">A propos</h2>
    <div class="row justify-content-center">
        <p class="portfolio-text">
            Bonjour !
            <br><br>
            Bienvenue sur mon Portfolio, j'ai actuellement 27 ans et je suis à la recherche d'une première expérience en
            intégration et développement web.
            <br><br>
            Après 4 ans de service au sein de la Marine Nationale, j'ai profité de ma reconversion dans le civil pour
            m’orienter vers les métiers du web.
            <br><br>
            Le code a toujours été un domaine qui m'a attiré, j’ai donc suivi la formation Webforce3 à la Philomathique
            de Bordeaux.
            <br><br>
            Cette formation m’a permis d’acquérir des compétences en matière de création de sites web, de leur
            développement, ainsi que la manipulation de bases de données.
            <br><br>
            Je souhaite consolider et améliorer mes acquis en travaillant comme développeur / intégrateur Web Junior.
        </p>
        <div class="mt-5">
            <figure>
                <a href="vendor/cv/bilal_belmehdi_cv.pdf" download><img src="img/cv-100.png" alt="Mon CV"></a>
                <figcaption class="portfolio-text ml-3">Mon CV</figcaption>
            </figure>
        </div>
    </div>
</section>

<section class="container" id="skill">
    <h2 class="portfolio-title">Compétences</h2>
    <div class="row align-items-center justify-content-center">

        <div class="card-comp">
            <div class="card-body">
                <h5 class="card-title">Intégration</h5>
                <h6 class="card-minTitle">html/css</h6>
                <div class="card-text">
                    <p>Bootstrap</p>
                    <p>Sass</p>
                </div>
                <h6 class="card-minTitle">Javascript</h6>
                <div class="card-text">
                    <p>Jquery</p>
                    <p>Ajax</p>
                </div>
                <h6 class="card-minTitle">Soe</h6>
                <div class="card-text">
                    <p>Certification opaquest</p>
                </div>
            </div>
        </div>

        <div class="card-comp">
            <div class="card-body">
                <h5 class="card-title">Développement</h5>
                <h6 class="card-minTitle">Php</h6>
                <div class="card-text">
                    <p>Mysql</p>
                    <p>Laravel</p>
                </div>
            </div>
        </div>

        <div class="card-comp">
            <div class="card-body">
                <h5 class="card-title">Cms</h5>
                <h6 class="card-minTitle">Wordpress</h6>
                <div class="card-text">
                    <p>Création de thème</p>
                    <p>Création de boutique e-commerce</p>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="container" id="realisation">
    <h2 class="portfolio-title">Réalisation</h2>
    <div class="row align-items-center justify-content-center">

        <div class="card-real">
            <img class="card-img-top" src="img/speedrunner.jpg" alt="SpeedRun img">
            <div class="card-header">
                <h6 class="card-realTitle text-uppercase">Speedrunner</h6>
                <p class="card-subTitle text-center">Projet de soutenance</p>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <p>Site de mise en relation de coureur de même niveaux par le biais de défis à réaliser.</p>
                    <p>Site réalisé en groupe (3 personnes), en 2 semaines.</p>
                    <hr>
                    <p class="text-uppercase">Liste des fonctionnalités :</p>
                    <ul>
                        <li>Chat et fil d’actualité entre runners</li>
                        <li>Classement par niveau</li>
                        <li>Données sur votre activité (nombre de km, vitesse moyenne, localisation…) avec l'API Google
                            Maps
                        </li>
                        <li>Traitement de données GPX</li>
                        <li>Succès</li>
                    </ul>
                </div>
            </div>
            <div class="card-footer">
                <div class="row justify-content-center">
                    <ul>
                        <li class="langageBlock">Laravel</li>
                        <li class="langageBlock">Sass</li>
                        <li class="langageBlock">Bootstrap 4.0</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card-real">
            <img class="card-img-top" src="img/passStorage.png" alt="SpeedRun img">
            <div class="card-header">
                <h6 class="card-realTitle text-uppercase">PassStorage</h6>
                <p class="card-subTitle text-center">Projet personnel</p>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <p>Application d'enregistrement des mots de passe et des identifiants,
                        des différents sites web sur une base de données personnelle</p>
                    <hr>
                    <p class="text-uppercase">Liste des fonctionnalités :</p>
                    <ul>
                        <li>Session de connexion pour utilisateur unique</li>
                        <li>Enregistrement des identifiants de connexion, mots de passe et du site web</li>
                        <li>Recherche des identifiants et des mots de passe</li>
                        <li>Modification et suppression des identifiants et mots de passe</li>
                    </ul>
                </div>
            </div>
            <div class="card-footer">
                <div class="row justify-content-center">
                    <ul>
                        <li class="langageBlock">PHP</li>
                        <li class="langageBlock">Jquery</li>
                        <li class="langageBlock">Bootstrap 4.0</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container" id="contact">
    <h2 class="portfolio-title">Contact</h2>
    <div class="row form-position">
        <?php if (!empty($errors)) { ?>
            <div class="form-group">
                <?php
                foreach ($errors as $error) {
                    echo $error;
                }
                ?>
            </div>
        <?php } ?>
        <form method="POST">
            <div class="form-group">
                <input type="text" class="contact-input" id="name" name="name" placeholder="Nom">
                <div class="required"></div>
            </div>

            <div class="form-group">
                <input class="contact-input" id="email" name="email" placeholder="Adresse mail">
                <div class="required"></div>
            </div>

            <div class="form-group">
                <input type="tel" class="contact-input" id="phone" name="phone" placeholder="Numéros de Télephone">
            </div>


            <div class="form-group">
                <textarea class="contact-input" id="message" name="message" rows="3" cols="100"
                          placeholder="Message"></textarea>
                <div class="required"></div>
            </div>

            <div>
                <button id="send" type="submit" class="btn btn-contact">Envoyer</button>
            </div>

        </form>
    </div>

</section>

<footer class="container-fluid">
    <div class="row justify-content-center">
        <a class="mr-1" href="https://github.com/kingCharlemagne"><img src="img/github.png" alt="Mon Github"></a>
        <a class="ml-1" href="https://linkedin.com/in/bilal-belmehdi"><img src="img/inkedin.png" alt="Mon Linkedin"></a>
        <a class="ml-1" href="vendor/cv/bilal_belmehdi_cv.pdf" download><img src="img/cv.png" alt="Mon CV"></a>
    </div>
    <div class="row justify-content-center">
        <p class="portfolio-text">Copyright © Bilal Belmehdi</p>
    </div>
</footer>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>