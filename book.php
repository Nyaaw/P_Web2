<!DOCTYPE html>
<html>
    <head>
        <title>Livre</title>
        <?php include "includes/inhead.php" ?>
        <?php include "includes/header.php" ?>
        <?php
        /**
         * ETML
         * Auteur: rossetlo
         * Date: 16.02.2018
         * Description: Page spécifique pour chaque livre.
         */
        ?>
    </head>
    <body>
        <div class="col-lg-12">
            <h2 class="bookDiv nav nav-tabs justify-content-center booktitle">Nom du livre</h2>
            <div class="col-lg-10 bookCentered">
                <!-- Nav tabs -->
                <div class="card">
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="section-nucleo-icons">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-12">
                                        <h2 class="title">Description</h2>
                                        <h5 class="description">
                                            <ul class="noPuce">
                                                <li>Nom</li>
                                                <li>Auteur</li>
                                                <li>Date</li>
                                                <li>Taille</li>
                                                <li>Prix</li>
                                                <li>Auteur</li>
                                                <li>Ect...</li>
                                            </ul>
                                        </h5>
                                        <a href="nucleo-icons.html" class="btn btn-primary btn-round btn-lg btnMargin" target="_blank">Evaluer !</a>
                                    </div>
                                    <div class="col-lg-7 col-md-12">
                                        <img src="assets/img/bg3.jpg" class="rounded">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("includes/script.php") ?>
    </body>
</html>