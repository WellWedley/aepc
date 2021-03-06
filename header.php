<!-- Navbar -->
<nav class="navbar sticky-top navbar-light bg-light mb-5 ">
    <a class="navbar-brand" href="./index.php">
        <img width="70" height="70" src="./img/logo/logo_amitie_cevenole1.png" alt="Logo de l'association Amitie Cevenole">
        Amitié Cévenole
    </a>

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="./index.php">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./sejours.php">Séjours</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./contact.php">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./apropos.php">A propos</a>
        </li>
        <?php

        $curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
        if (isset($_SESSION['email']) || isset($_SESSION['pseudo'])) {
            echo ' 
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img width="15"src="./img/logo/membre.png">
                        </a>

                <div class="dropdown-menu dropdown-menu-right">';

            if ($curPageName !== 'welcome.php') {

                echo ' <!-- Paramètres du compte -->
                    <button type="button" class="btn btn-primary dropdown-item" 
                    onclick="window.location.href=\'./welcome.php\';">
                                Mon espace    
                    </button>';
            }
            echo ' <!-- Bouton appelant le modal "#logout"-->
                    <button  type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#logout">
                    Se déconnecter
                </button>
                </div>
            </li>';
        } elseif (!isset($_SESSION['email'])) {
            echo ' 
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="ue" aria-expanded="false">
                <img width="17" height="20" src="./img/logo/membre.png"></a>

            <div class="dropdown-menu dropdown-menu-right">
                <!-- Login Button trigger modal -->
                <button  type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#login">
                    Se connecter
                </button>
                <!-- Signup Button trigger modal -->
                <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#signup">
                    S\'enregistrer
                </button>
            </div>
        </li>';
        }
        ?>

    </ul>
</nav> <?php
        $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
        if ($remarks == 'failed') {
            echo '<div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <div class=" bg-white mb-5">
                            <h6 class="text-dark">
                                Identifiants erronés, veuillez réessayer.
                            </h6>
                         </div>
                    </div>
                </div>';
        } ?>
<!-- Modal de connexion -->
<div class="modal  fade" id="login" tab.index="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="ue">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalLabel">Se connecter</h5>
                <button type="button" class="close btn-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="ue">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="login-form" action="./logincheck.php" method="POST" id="signin">
                    <?php
                    $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
                    if ($remarks == null and $remarks == "") {
                        echo ' <h6 class="bg-dark text-white text-center" class="headrg"
                            >Veuillez renseigner vos identifiants</h6> ';
                    }

                    ?>

                    <div class="row form-group mt-3">
                        <div class="col-lg-4 col-md-4 col-sm-4 ">
                            <p class="text-right"><label id="email-login">Email : </label></p>
                            <p class="text-right"> <label id="">Mot de passe : </label></p>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-4 mb-2">
                            <p>
                                <input class="form-control form-control-sm text-center" type="text" name="email" required /></p>
                            <p> <input class="form-control form-control-sm text-center" type="password" name="mdp" required /></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <button class="btn btn-primary btn-dark login-btn" name="submit" type="submit" value="Connexion" id="st-btn" autofocus>
                            Connexion</button>
                    </div>

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#signup">Je n'ai pas de compte</button>
                </div>
            </div>
        </div>
    </div>
</div>








<!-- Modal d'enregistrement-->
<div class="modal  fade" id="signup" tab.index="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="ue">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center ">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalLabel">S'enregistrer</h5>
                <button type="button " class="close btn-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="ue">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./execute.php" onsubmit="return validateForm()" name="reg" method="POST">
                    <div class="row form-group">
                        <label for="prenom-form"class="col-5">
                            <p class="text-right">Prénom :</p>
                        </label>
                        <p> <input type="text" name="prenom" id="prenom-form" required /> </p>
                    </div>

                    <div class="row form-group">
                        <label for="nom-form" class="col-5">
                            <p class="text-right">Nom : </p>
                        </label>
                        <p><input type="text" name="nom" id="nom-form" required /></p>
                    </div>
                    <div class="row form-group">
                        <label for="email-form" class="col-5">
                            <p class="text-right">Email : </p>
                        </label>
                        <p><input type="text" name="email" required /></p>
                    </div>
                    
                    <div class="row form-group">
                        <label for="pseudo-form" class="col-5">
                            <p class="text-right">Pseudo : </p>
                        </label>
                        <p> <input type="text" name="pseudo" required /></p>
                    </div>
                    <div class="row form-group">
                        <label for="pwd-form" class="col-5">
                            <p class="text-right">Mot de passe : </p>
                        </label>
                        <p> <input type="password" name="mdp" required /></p>
                    </div>


                    <!-- <p class="text-right"> <label id="tb-name">Email : </label></p>
                            <p class="text-right"><label id="tb-name">Pseudo : </label></p>
                            <p class="text-right"> <label id="tb-name">Mot de passe : </label></p>
                   -->

                    <div class="form-group">



                      
                       
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





<!-- Modal de déconnexion-->
<div class="modal  fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="ue">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalLabel">Êtes vous sûr(e) de vouloir vous déconnecter ?</h5>
                <button type="button " class="close btn-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="ue">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./logout.php" onsubmit="return validateForm()" name="reg" method="POST">
                    <button class="btn btn-primary register-button" name="submit" type="submit" value="envoyer">Oui</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close" data-dismiss="modal" data-toggle="modal">
                    <p>Annuler</p>
                </button>
            </div>
        </div>
    </div>
</div>