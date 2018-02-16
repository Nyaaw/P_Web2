<?php
/**
 * ETML
 * Auteur : Pierric Ripoll
 * Date: 26.01.2018
 * Description : fichier à include dans les pages du site au début du body pour la navbar.
 */
?>

<!-- Navbar -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <h4 class="title title-up">Se connecter</h4>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="">
                        <div class="input-group form-group-no-border">
                            <span class="input-group-addon">
                                <i class="now-ui-icons users_circle-08"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Identifiant">
                        </div>
                        <div class="input-group form-group-no-border">
                            <span class="input-group-addon">
                                <i class="now-ui-icons text_caps-small"></i>
                            </span>
                            <input type="password" placeholder="Mot de passe" class="form-control" />
                        </div>
                        <div class="checkbox">
                        <input id="checkboxSignup" type="checkbox">
                            <label for="checkboxSignup">Rester connecté</label>
                        </div>
                        <div class="form-group-no-border text-center">
                            <button type="submit" class="btn btn-primary bootstrap-switch-large">Se connecter</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default">Nice Button</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<nav class="navbar bg-dark navbar-expand-lg fixed-top">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand font-weight-bold" href="../View/Accueil.php" rel="tooltip" data-placement="bottom" data-original-title="Retour à l'accueil">
                Passion Lecture
            </a>

            <!--<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
            Je ne sais toujours pas à quoi sert cette chose 
            -->
        </div>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Liste des livres</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link btn btn-neutral" data-toggle="modal" data-target="#myModal">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Inscrivez-vous !</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
<!-- End Navbar -->
