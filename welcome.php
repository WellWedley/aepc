<?php
include 'session.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="icon " href="img/favico/logo_amitie_cevenole1.ico">
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
			<h1 align='center'>Bienvenue <?php echo $loggedin_name ?>,</h1>
			<form action=""><input type="text" value="<?php echo $loggedin_session ?>" disabled></form>
			<div id="contentbox">
				<?php
				$sql = "SELECT * FROM animateurs where mail_anim=$loggedin_session";
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
										<td class="tl-1">
											<div align="left" id="tb-name">Identifiant:</div>
										</td>
										<td class="tl-4"><?php echo $rows['id_anim']; ?></td>
									</tr>
									<tr id="lg-1">
										<td class="tl-1">
											<div align="left" id="tb-name">Pseudo :</div>
										</td>
										<td class="tl-4"><?php echo $rows['pseudo_anim']; ?></td>
									</tr>
									<tr id="lg-1">
										<td class="tl-1">
											<div align="left" id="tb-name">Name:</div>
										</td>
										<td class="tl-4"><?php echo $rows['prenom_anim']; ?> <?php echo $rows['nom']; ?></td>
									</tr>
									<tr id="lg-1">
										<td class="tl-1">
											<div align="left" id="tb-name">Email :</div>
										</td>
										<td class="tl-4"><?php echo $rows['_anim']; ?></td>
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
	<div id="footer">
		<p> Amitié Cévenole</p>
	</div>
</body>

</html>