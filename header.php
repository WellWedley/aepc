<!-- Navbar -->
<nav class="navbar sticky-top navbar-light bg-light ">
    <a class="navbar-brand" href="index.php">
        <img width="70" height="70" src="img/logo/logo_amitie_cevenole1.png" alt="Logo de l'association Amitie Cevenole">
        Amitié Cévenole
    </a>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sejours.php">Séjours</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="apropos.php">A propos</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="ue" aria-expanded="false">
                <img width="17" height="20" src="img/logo/membre.png"></a>

            <div class="dropdown-menu dropdown-menu-right">
                <!-- Login Button trigger modal -->
                <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#login">
                    Se connecter
                </button>
                <!-- Signup Button trigger modal -->
                <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#signup">
                    S'enregistrer
                </button>
            </div>
        </li>
    </ul>

</nav>

 <!-- Modal de connexion --> 
<div class="modal  fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="ue">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white " id="exampleModalLabel">Se connecter</h5>
                <button type="button" class="close btn-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="ue">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="login-form" action="logincheck.php" method="POST" id="signin" id="reg">
                    <?php
                    $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
                    if ($remarks == null and $remarks == "") {
                        echo ' <h6 class="bg-dark text-white text-center" id="reg-head" class="headrg"
                            >Veuillez renseigner vos identifiants</h6> ';
                    }
                    if ($remarks == 'failed') {
                        echo ' <div class="" id="reg-fail" class="headrg ">Identifiants erronés, veuillez réessayer.</div> ';
                    }
                    ?>

                    <div class="row form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <p class="text-right"><label id="email-login">Email : </label></p>
                            <p class="text-right"> <label id="">Mot de passe : </label></p>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6">
                            <p>
                                <input class="form-control form-control-sm text-center" type="text" id="tb-box" name="email" required /></p>
                            <p> <input class="form-control form-control-sm text-center" id="tb-box" type="password" name="mdp" required /></p>
                        </div>
                        <button class="btn  
                    btn-primary btn-dark login-btn" name="submit" type="submit" value="Connexion" id="st-btn" autofocus>Connexion</button>
                    </div>

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#signup">Je n'ai pas de compte</button>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Modal d'enregistrement étape 2--> 





<!-- Modal d'enregistrement étape 2--> 
<div class="modal  fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="ue">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalLabel">S'enregistrer</h5>
                <button type="button " class="close btn-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="ue">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="execute.php" onsubmit="return validateForm()" name="reg" method="POST" id="reg">

                    <div class="row form-group">
                        <div class="col-md-4">
                            <p class="text-right"><label for="prenom-form">Prénom : </label></p>
                            <p class="text-right"> <label id="nom">Nom : </label></p>
                            <p class="text-right"> <label id="tb-name">Email : </label></p>
                            <p class="text-right"><label id="tb-name">Pseudo : </label></p>
                            <p class="text-right"> <label id="tb-name">Mot de passe : </label></p>
                        </div>
                        <div class="col-md-8">

                            <p> <input type="text" name="prenom" id="prenom-form" required /> </p>
                            <p><input type="text" name="nom" id="nom-form" required /></p>
                            <p><input type="text" id="tb-box" name="email" required /></p>
                            <p> <input type="text" id="tb-box" name="pseudo" required /></p>
                            <p> <input id="tb-box" type="password" name="mdp" required /></p>
                        </div>
                    </div>
                    <button class="btn btn-primary register-button" name="submit" type="submit" value="envoyer">S'enregistrer</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#login">J'ai déjà un compte</button>
            </div>
        </div>
    </div>
</div>
