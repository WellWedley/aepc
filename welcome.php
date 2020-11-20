<?php
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>AEPC</title>
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
<div id="center">
<div id="center-set">
<h1 align='center'>Bienvenue  <?php echo $loggedin_session; ?>,</h1>
Vous êtes maintenant en ligne.
<div id="contentbox">
<?php
$sql = "SELECT * FROM animateurs where mail_anim=$loggedin_id";
$result = mysqli_query($con, $sql);
?>
<?php
while ($rows = mysqli_fetch_array($result)) {
    ?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Votre profil</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Identifiant:</div> </td>
<td class="tl-4"><?php echo $rows['id_anim']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Pseudo :</div></td>
<td class="tl-4"><?php echo $rows['pseudo']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['prenom']; ?> <?php echo $rows['nom']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email :</div></td>
<td class="tl-4"><?php echo $rows['email']; ?></td>
</tr>
</table>
<div id="reg-bottom" class="btmrg"></div>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Se déconnecter</a></div>
<div id="st"><a href="deleteac.php" id="st-btn">Supprimer le compte</a></div>
</div>
</div>
<?php
// close while loop
}
?>
</div>
</div>
</div>
</br>
<div id="footer"><p> Amitié Cévenole</p></div>
</body>
</html>