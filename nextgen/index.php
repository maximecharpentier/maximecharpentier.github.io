<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Maxime Charpentier - Nespresso';
        $description = '';
        include '../inc/head.php';
    ?>
    <body class="body--project" role="document">
        <?php include '../inc/header.php'; ?>
        <section class="section section--heading">
            <img class="heading__image" src="../assets/img/nextgen.jpg" alt="Photo du projet Nespresso">
            <h1 class="heading__title">NextGen</h1>
        </section>
        <section class="section section--intro section--nextgen">
            <div class="section__wrapper">
                <time class="section__date">décembre 2017</time>
                <p class="section__type">Intégration</p>
                <h2 class="section__name">NextGen</h2>
                <p class="section__text section__text--nextgen">Ce projet consistait à intégrer une maquette desktop d'un site d'agence type, de manière responsive.</p>
                <a class="section__link" href="">Voir le site</a>
                <img class="section__image" src="../assets/img/nextgen/desktop.jpg" alt="Image du site actuel Nespresso">
            </div>
        </section>
        <?php include '../inc/modal.php'; ?>
        <script src="../assets/js/global.js"></script>
        <script src="../assets/js/project.js"></script>
        <?php include '../inc/analytics.php'; ?>
    </body>
</html>