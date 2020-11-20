<?php include "logincheck.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Aepc Amitié Cévenole</title>
</head>
<body>
<header>
	<nav>
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="">Lien 2</a></li>
		</ul>
	</nav>
</header>

<h1 class='title1'> Association d'Education Populaire Cévenole</h1>
<div id="center">
<div id="center-set">
<div id="signup">
<div id="signup-st">
<div align="center">
<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks == null and $remarks == "") {
    echo ' <div id="reg-head" class="headrg">Première connexion</div> ';
}
if ($remarks == 'success') {
    echo ' <div id="reg-head" class="headrg">Enregistrement effectué.</div> ';
}
if ($remarks == 'failed') {
    echo ' <div id="reg-head-fail" class="headrg">L\'utilisateur existe, échec de l\'enregistrement</div> ';
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
<div align="left" id="tb-name">Prénom:</div>
</td>
<td width="171">
<input type="text" name="fname" id="tb-box"/>
</td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Nom :</div></td>
<td><input type="text" name="lname" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Email :</div></td>
<td><input type="text" id="tb-box" name="address" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Prénom:</div></td>
<td><input type="text" id="tb-box" name="username" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">M. de passe :</div></td>
<td><input id="tb-box" type="password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Submit" id="st-btn"/></div>
</form>
<div id="reg-bottom" class="btmrg">Copyright &copy; 2015 7topics.com</div>
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
    echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
}
?>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td><input type="text" id="tb-box" name="username" /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Mot de passe:</div></td>
<td><input id="tb-box" type="password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Login" id="st-btn"/></div>
</form>

</div>
</div>
</div>
</div>
<div id="footer"><p> Amitié Cévenole</p></div>
</body>
</html>