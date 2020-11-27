<?php
session_start();
include 'session.php';
?>
<!DOCTYPE html>
<html>
<?php include 'head.php'?>

<body class="bg-dark">
	<div class="container-fluid">
		<?php include 'header.php'?>
		<div id="center">
			<div id="center-set">
				<h1 style="color:white" align='center'>Bienvenue <?php echo $_SESSION['prenom_anim'] ?>,</h1>

				<div id="contentbox">
					<?php
					$sql = "SELECT * FROM animateurs where id_anim='$loggedin_id'"; 
					$result = mysqli_query($con, $sql);
					if (!$result) {
						exit();
					}
					?>
					<?php
					while ($rows = mysqli_fetch_array($result)) {

					?>
						<form action="">
							<p> <input type="text" value="<?php echo $loggedin_session ?>" disabled></p>
							<p><input type="text" value="<?php echo $rows['pseudo_anim'] ?>"></p>

						</form>
						<div id="signup">
							<div id="signup-st">
								<form action="" method="POST" id="info_user" id="reg">
									<div id="reg-head" class="headrg">Votre profil</div>
									<table border="0" align="center" cellpadding="2" cellspacing="0">
										<tr id="lg-1">
											<td class="tl-1">
												<div align="left" id="tb-name">Id : </div>
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
												<div align="left" id="tb-name">Nom :</div>
											</td>
											<td>
												<?php echo $rows['nom_anim']; ?>
											</td>
										</tr>
										<tr>
											<td>
												<div align="left" id="tb-name">prenom :</div>
											</td>
											<td class="tl-4"><?php echo $rows['prenom_anim']; ?>
											</td>
										</tr>
										<tr id="lg-1">
											<td class="tl-1">
												<div align="left" id="tb-name">Email :</div>
											</td>
											<td class="tl-4"><?php echo $rows['mail_anim']; ?></td>
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
								<a href="#"><img width="30" src="./img/logo/plus.png" alt="Inscription"> Inscrire mon enfant à un séjour</a>
								<a href="./sejours.php"><img width="30" src="./img/logo/read.png" alt="consulter les séjours"> Consulter les séjours</a>
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
		<?php include 'footer.php'?>
		</div>
	</div>
</body>

</html>