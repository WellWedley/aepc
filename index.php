<?php include "logincheck.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="icon " href="img/favico/logo_amitie_cevenole1.ico">
	<!-- Bootstrap 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
-->
	<title>Aepc Amitié Cévenole</title>
</head>
<body>
<header>
	<nav>
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="">Lien 2</a></li>


	</nav>
</header>
<h1 class='titleh1'> Association d'Education Populaire Cévenole</h1>
<!-- Modal
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
<div id="center">
<div id="center-set">
<div id="signup">
<div id="signup-st">
<div style="align:center">

<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks == null and $remarks == "") {
    echo ' <div id="reg-head" class="headrg">Première connexion</div> ';
}
if ($remarks == 'success') {
    echo ' <div id="reg-head" class="headrg">Enregistrement effectué.</div> ';
}
if ($remarks == 'failed') {
    echo ' <div id="reg-head-fail" class="headrg">Cet utilisateur existe déjà, échec de l\'enregistrement</div> ';
}
if ($remarks == 'error') {
    echo ' <div id="reg-head-fail" class="headrg">Echec de l\'enregistrement <br> Error: ' . $_GET['value'] . ' </div> ';
}
?>

</div>
<form name="reg" action="execute.php" onsubmit="return validateForm()" method="POST" id="reg">
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td class="t-1">
<div align="left" id="tb-name">Prénom :</div>
</td>
<td width="171">
<input type="text" name="prenom" id="tb-box"/>
</td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Nom : </div></td>
<td><input type="text" name="nom" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Email : </div></td>
<td><input type="text" id="tb-box" name="email" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Pseudo : </div></td>
<td><input type="text" id="tb-box" name="pseudo" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Mot de passe : </div></td>
<td><input id="tb-box" type="password" name="mdp" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Envoyer" id="st-btn"/></div>
</form>

</div>
</div>
<div id="login">
<div id="login-st">
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
<td class="tl-1"><div align="left" id="tb-name">Email :</div></td>
<td><input type="text" id="tb-box" name="email" /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Mot de passe :</div></td>
<td><input id="tb-box" type="password" name="mdp" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Connexion" id="st-btn"/></div>
</form>

</div>
</div>
</div>
</div>
<div id="footer"><p> Amitié Cévenole</p></div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
--></body>
</html>