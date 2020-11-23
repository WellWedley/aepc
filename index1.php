<?php include "logincheck.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon " href="img/favico/logo_amitie_cevenole1.ico">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Additional CSS
       <link rel="stylesheet" type="text/css" href="style.css" />-->
  <title>AEPC</title>
</head>

<body class="bg-dark">
  <!-- Container-fluid-->
  <div class="container-fluid bg-dark nav-div">
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img width="80" height="80" src="img/logo/logo_amitie_cevenole1.png" alt="Logo de l'asso">Amitié Cévenole</a>

      <ul class="nav justify-content-center nav-pills ">
        <!-- Menu déroulant-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img width="30" height="36" src="img/logo/membre.png"></a>

          <div class="dropdown-menu">
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
        <li class="nav-item ">
          <a class="nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Séjours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">A propos</a>
        </li>
      </ul>
    </nav>
  </div>

  <!-- Login Modal -->
  <div class="modal  fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" id="signin" id="reg">
            <?php
            $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
            if ($remarks == null and $remarks == "") {
              echo ' <div id="reg-head" class="headrg">Se connecter</div> ';
            }
            if ($remarks == 'failed') {
              echo ' <div id="reg-head-fail" class="headrg">Identifiants erronés, veuillez réessayer.</div> ';
            }
            ?>
            <table border="0" align="center" cellpadding="2" cellspacing="0">
              <tr id="lg-1">
                <td class="tl-1">
                  <div align="left" id="tb-name">Email :</div>
                </td>
                <td><input type="text" id="tb-box" name="email" /></td>
              </tr>
              <tr id="lg-1">
                <td class="tl-1">
                  <div align="left" id="tb-name">Mot de passe :</div>
                </td>
                <td><input id="tb-box" type="password" name="mdp" /></td>
              </tr>
            </table>
            <div class="modal-footer">
              <button class="btn btn-primary" name="submit" type="submit" value="Connexion" id="st-btn">Se connecter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- Sign-up Modal -->
  <div class="modal  fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form name="reg" action="execute.php" onsubmit="return validateForm()" method="POST" id="reg">
            <table border="0" align="center" cellpadding="2" cellspacing="0">
              <tr>
                <td class="t-1">
                  <div align="left" id="tb-name">Prénom :</div>
                </td>
                <td width="171">
                  <input type="text" name="prenom" id="tb-box" />
                </td>
              </tr>
              <tr>
                <td class="t-1">
                  <div align="left" id="tb-name">Nom : </div>
                </td>
                <td><input type="text" name="nom" id="tb-box" /></td>
              </tr>
              <tr>
                <td class="t-1">
                  <div align="left" id="tb-name">Email : </div>
                </td>
                <td><input type="text" id="tb-box" name="email" /></td>
              </tr>
              <tr>
                <td class="t-1">
                  <div align="left" id="tb-name">Pseudo : </div>
                </td>
                <td><input type="text" id="tb-box" name="pseudo" /></td>
              </tr>
              <tr>
                <td class="t-1">
                  <div align="left" id="tb-name">Mot de passe : </div>
                </td>
                <td><input id="tb-box" type="password" name="mdp" /></td>
              </tr>
            </table>
           
            <div class="modal-footer">
              <button class="btn btn-primary" name="submit" type="submit" value="envoyer" >S'enregistrer</button>
          </form>
        </div>
          </form>

        </div>
      </div>
    </div>
  </div>


  <!-- Script Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
</body>

</html>