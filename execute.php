


<?php
include('./db.php');

	$email = $_POST['email'];
	$result = mysqli_query($con, "SELECT * FROM tuteurs WHERE mail_tut='$email'");
	$num_rows = mysqli_num_rows($result);
	if ($num_rows) {
		header("location: ./index.php?remarks=failed");
	} else {
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$email = $_POST['email'];
		$pseudo = $_POST['pseudo'];
		$mdp = $_POST['mdp'];
		if (mysqli_query($con, "INSERT INTO tuteurs(prenom_tut, nom_tut, mail_tut,pseudo_tut, mdp_tut)VALUES('$prenom', '$nom','$email', '$pseudo', '$mdp')")) {
			header("location: ./index.php?remarks=success");
		} else {
			$e = mysqli_error($con);
			header("location: ./welcome.php?remarks=error&value=$e");
		}
	}







/*<?php 

include('./db.php');
$email=$_POST['email'];
$result = mysqli_query($con,"SELECT * FROM tutateurs WHERE mail_tut='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: ./index.php?remarks=failed"); 
}else {
 $prenom=$_POST['prenom'];
 $nom=$_POST['nom'];
 $email=$_POST['email'];
 $pseudo=$_POST['pseudo'];
 $mdp=$_POST['mdp'];
 if(mysqli_query($con,"INSERT INTO tutateurs(prenom_tut, nom_tut, mail_tut,pseudo_tut, mdp_tut)VALUES('$prenom', '$nom','$email', '$pseudo', '$mdp')")){ 
	header("location: ./index.php?remarks=success");
 }else{
	 $e=mysqli_error($con);
	header("location: ./index.php?remarks=error&value=$e");	 
 }
}?*/
