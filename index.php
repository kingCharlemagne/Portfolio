<?php
require 'php/contactTraitement.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Développeur web junior | Bilal Belmehdi </title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css-compiled/global.css">
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
    <?php
        include 'php/aPropos.php';
    ?>
</section>

<section class="container" id="skill">
    <?php
        include 'php/competence.php';
    ?>
</section>


<section class="container" id="realisation">
    <?php
        include 'php/realisation.php';
    ?>
</section>


<section class="container" id="contact">
    <?php
        require 'php/contactForm.php';
    ?>
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