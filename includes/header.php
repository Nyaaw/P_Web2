<?php
/**
 * ETML
 * Auteur : Pierric Ripoll
 * Date: 26.01.2018
 * Description : fichier à include dans les pages du site au début du body pour la navbar.
 */
?>

<!-- Navbar -->
<nav class="navbar bg-dark navbar-expand-lg fixed-top">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand font-weight-bold" href="../Accueil.php" rel="tooltip" data-placement="bottom" data-original-title="Retour à l'accueil">
                Passion Lecture
            </a>

            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Liste des livres</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link btn btn-neutral" href="" target="_blank">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Inscrivez-vous !</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
