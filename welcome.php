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


		<h1 class="text-center" style="color:white">Bienvenue <?php echo $_SESSION['prenom_tut'] ?>,</h1>
		<div class="container-fluid">
			<div class="row" id="">

				<!-- Barrre de Navigation secondaire  -->
				<div class="col-12">
					<ul class="nav  nav-tabs nav-pills nav-justified">
						<li class="nav-item">
							<a class="nav-link active " href="#p1" data-toggle="tab">Inscrire un enfant</a>
						</li>
						<li class="nav-item">
							<a class="nav-item nav-link" href="#p2" data-toggle="tab">Ajouter un séjour</a>
						</li>
						<li class="nav-item">
							<a class="nav-item nav-link" href="#p3" data-toggle="tab">Gérer mon séjour</a> </li>
					</ul>
				</div>


				<!-- Contenu de la barre de navigation secondaire (3 Panneaux)-->
				<div class="tab-content mt-5 col-12">
					<div class="tab-pane fade show active" id="p1">
						<!-- Formulaire pour Enregistrer un enfant -->
						<form action="exec_enfant.php" method="POST">
							<div class="form-group row">
								<label for="" class="col-4">
									<p class="text-white text-right">Nom : </p>
								</label>
								<input name="nom" type="text" class="col-4 dflex align-items-center">
							</div>
							<div class="form-group row">
								<label for="" class="col-4">
									<p class="text-white text-right">Prénom : </p>
								</label>
								<input type="text" class="col-4" name="prenom">
							</div>
							<div class="form-group row">
								<label for="" class="col-4">
									<p class="text-white text-right">Date de Naissance : </p>
								</label>
								<input type="date" class="col-4" name="date">
							</div>
							<div class="container mt-5">
								<div class="row justify-content-center">
									<button class="btn btn-primary col-4 " name="ajout_enf" type="submit">
										<p class="">Enregistrer mon enfant</p>
									</button>
								</div>
							</div>
						</form>
					</div>

					<!-- Formulaire pour ajouter un séjour -->
					<div class="tab-pane fade" id="p2">
						<div class="container mt-2">
							<div class="row justify-content-center">
								<form action="exec_enfant.php" method="POST">
									<div class="col-12 text-center">
										<?php
										$sql = "SELECT * FROM enfants where fk_id_tut=$loggedin_id";
										$result = mysqli_query($con, $sql);
										if (mysqli_num_rows($result) == 0) {
											echo '<h3 class="text-white  
											mb-5">Enregistrez d\'abord votre 
											enfant dans le menu "Inscrire un enfant"
											</h3>
											<button type="button" class="btn btn-danger" 
											data-toggle="tab"
											data-target="#p1">
											 Ok, enregistrer mon enfant.</button>';
										} else {
											// Choix de l'enfant à inscrire au séjour 
											echo '<h3 class="text-white  mb-5">
											Quel enfant souhaitez-vous inscrire ? </h3>
											<select name="choix_enf" class="col-12"  id="">';
											while ($rows = mysqli_fetch_array($result)) {
												echo '<option  value="' . $rows['id_enf'] . '">';
												echo $rows['nom_enf'] . ' ' . $rows['prenom_enf'];
												echo '</option>';
											}
											echo '</select>' . '
											<div class="container mt-5">
												<div class="row justify-content-center">
													<a href="#new" class="btn btn-primary col-4" data-toggle="collapse" name="suivant" type="">
														<p class="">Suivant </p>
													</a>
												</div>
											</div>';
										}
										?>

										<div class="collapse text-white text-center" id="new">
											<?php
											$sql = "SELECT * FROM sejours WHERE date_debut>NOW()";
											$result = mysqli_query($con, $sql);
											if (mysqli_num_rows($result) == 0) {
												echo '<h3 class=" 
											mt-5">Il n\'y a pas de séjour organisé actuelllement. Veuilllez réessayer plus tard.
											</h3>';
											} else {

												echo '<h3 class="  mb-5 mt-5">
												Quel est le  séjour concerné ? </h3> '.'
												<div class="btn-group btn-group-toggle" data-toggle="buttons">';

												while ($rows = mysqli_fetch_array($result)) {
													echo
														'<div class="container mt-5 col-4">
															<div  class="row justify-content-center">
																<h6> ' . ' Du  ' . $rows['date_debut'] .
															' Au  ' . $rows['date_fin'] . '
																</h6> 	
														
																<label class="btn btn-secondary ">
																	<input type="radio" id="'.$rows['id_sejour'].' 
																		"name="choix_sejour" value="'.$rows['id_sejour'].'"  
																		autocomplete="off" checked> '.$rows['nom_sejour'].' 
																</label>
															</div>
														</div>	
														<br> 
														';
												}
												echo '</div><div class="row justify-content-center">
																<button class="btn btn-primary col-4 mt-5" 
																	name="ajout_sej" type="submit">
																	<p class="">Terminé</p>
																</button>
													 </div>';
											}

											?>


										</div>
									</div>
								</form>
								<?php ?>

							</div>
						</div>
					</div>

					<div class="tab-pane fade text-center" id="p3">
					<?php
										$sql = "SELECT * FROM participe_sejour where fk_id_enf=(SELECT id_enf from enfants LIMIT 1)";
										$result = mysqli_query($con, $sql);
										if (mysqli_num_rows($result) == 0) {
											echo '<h3 class="text-white  
											mb-5">Vous n\'avez aucune inscription active actuellement. 

											</h3>
											<button type="button" class="btn btn-danger" 
											data-toggle="tab"
											data-target="#p2">
											 Ok, ajouter un séjour.</button>';
										} else {
											// Choix de l'enfant à inscrire au séjour 
											echo '<h3 class="text-white  mb-5">
											Quel enfant souhaitez-vous inscrire ? </h3>
											<select name="choix_enf" class="col-12"  id="">';
											while ($rows = mysqli_fetch_array($result)) {
												echo '<option  value="' . $rows['id_enf'] . '">';
												echo $rows['nom_enf'] . ' ' . $rows['prenom_enf'];
												echo '</option>';
											}
											echo '</select>' . '
											<div class="container mt-5">
												<div class="row justify-content-center">
													<a href="#new" class="btn btn-primary" data-toggle="collapse" name="suivant" type="">
														<p class="">Suivant </p>
													</a>
												</div>
											</div>';
										}
										?>
					</div>
				</div>
			</div>
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
		</div>

	</div>


	<div id="footer">
		<?php include 'footer.php' ?>
	</div>
	</div>
</body>

</html>