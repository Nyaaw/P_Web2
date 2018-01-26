<!DOCTYPE html>
<html>
<head>
    <title>Bonjour</title>
    <?php include "inhead.php" ?>
</head>

<?php
/**
 * ETML
 * Auteur: rossetlo
 * Date: 26.01.2018
 * Description:
 */
?>

    <body>
        <div class="wrapper">
            <div class="page-header clear-filter">
                <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/img_fond_noir.jpg');">

                </div>
                <div class="container">
                    <div class="content-center brand">
                        <img class="n-logo" src="./assets/img/now-logo.png">
                        <h1 class="h1-seo">Passion lecture</h1>
                        <h3>Un site pour les fans de littératures en tout genre et rédacteurs à mi-temps.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="carousel">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div></div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets/img/ryan.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/img/eva.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/img/avatar.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("script.php") ?>
    </body>


</html>