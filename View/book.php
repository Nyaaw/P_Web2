<!DOCTYPE html>
<html>
    <head>
        <title>Livre</title>
        <?php include "includes/inhead.php" ?>
        <?php include "includes/header.php" ?>
        <link rel="stylesheet" href="assets/css/bars-1to10.css">
    </head>
    <body>
        <div class="col-lg-12">
            <h2 class="bookDiv nav nav-tabs justify-content-center booktitle">Nom du livre</h2>
            <div class="col-lg-8 bookCentered">
                <!-- Nav tabs -->
                <div class="card">
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="section-nucleo-icons">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-12">
                                        <h2 class="title">Description</h2>
                                        <!-- Non valide w3c -->
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
                                        <h3 class="textLeft">Evaluez</h3>
                                        <form method="post">
                                            <select id="example">
                                                <option name="note" value="1">1</option>
                                                <option name="note" value="1.5">1.5</option>
                                                <option name="note" value="2">2</option>
                                                <option name="note" value="2.5">2.5</option>
                                                <option name="note" value="3">3</option>
                                                <option name="note" value="3.5">3.5</option>
                                                <option name="note" value="4">4</option>
                                                <option name="note" value="4.5">4.5</option>
                                                <option name="note" value="5">5</option>
                                            </select>
                                        </form method="post">
                                    </div>
                                    <div class="col-lg-7 col-md-12">
                                        <img src="assets/img/bg3.jpg" class="rounded" alt="image du livre">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("includes/script.php") ?>
        <script src="assets/js/core/jquery.barrating.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#example').barrating({
                    theme: 'bars-1to10'
                });
            });
        </script>
    </body>
</html>