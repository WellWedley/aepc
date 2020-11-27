<?php
session_start();
include 'session.php';
?>
<!DOCTYPE html>
<html>
<?php include 'head.php' ?>

<body class="bg-dark">
	<div class="container-fluid">
		<?php include 'header.php' ?>

		<h1 class="text-center" style="color:white">Bienvenue <?php echo $_SESSION['prenom_anim'] ?>,</h1>
		<div class="row text-center">
			<div class="col-md-6"><a href="#"><img width="50" src="./img/logo/plus.png" alt="Inscription"> Inscrire mon enfant à un séjour</a>
			</div>
			<div class="col-md-6"><a href="./sejours.php"><img width="50" src="./img/logo/read2.png" alt="consulter les séjours"> Consulter les séjours</a></div>
		</div>


		<div class="row" id="">
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
				<div class="column">
				</div>



				<div class="container" id="login">
					<div class="row">
						<div class="dropdown" id="">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<img width="30" src="./img/logo/option_white.png">
							</a>
							<div class="dropdown-menu dropdown-menu-left">
								<div class="dropdown-item">
									<button class="btn"> Modifier mes données</button>
								</div>
								<div class="dropdown-item">
									<button class="btn" href="#"> Supprimer mon compte</button>
								</div>
							</div>
						</div>
					</div>
					

				<?php

				// close while loop
			}
				?>
				</div>
		</div>

		</br>
		<div id="footer">
			<?php include 'footer.php' ?>
		</div>

</body>

</html>