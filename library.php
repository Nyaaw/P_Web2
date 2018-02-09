<!DOCTYPE html>
<html>
    <head>
        <title>Liste des livres</title>
        <?php include "inhead.php" ?>
        <?php include "includes/header.php" ?>
        <?php
        /**
         * ETML
         * Auteur: rossetlo
         * Date: 02.02.2018
         * Description:
         */
        ?>
    </head>
    <body class="landing-page sidebar-collapse">
        <div class="wrapper">
            <div class="page-header page-header-small">
                <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg6.jpg');">
                </div>
                <div class="container">
                    <div class="content-center">
                        <h1 class="title">Liste de livres</h1>
                        <div class="text-center">
                            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Liste des livres -->
            <div class="col-md-3">
                <div class="cardbook">
                    <img src="assets/img/img1.png" alt="Thumbnail Image">
                    <h4 class="booktitle title">Titre du livre</h4>
                    <p class="category text-primary booktitle">Auteur</p>
                </div>
            </div>
        <?php include("script.php") ?>
    </body>
</html>