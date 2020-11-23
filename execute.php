<?php 
session_start();
include('db.php');
$email=$_POST['email'];
$result = mysqli_query($con,"SELECT * FROM animateurs WHERE mail_anim='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: index.php?remarks=failed"); 
}else {
 $prenom=$_POST['prenom'];
 $nom=$_POST['nom'];
 $email=$_POST['email'];
 $pseudo=$_POST['pseudo'];
 $mdp=$_POST['mdp'];
 if(mysqli_query($con,"INSERT INTO animateurs(prenom_anim, nom_anim, mail_anim,pseudo_anim, mdp_anim)VALUES('$prenom', '$nom','$email', '$pseudo', '$mdp')")){ 
	header("location: index.php?remarks=success");
 }else{
	 $e=mysqli_error($con);
	header("location: index.php?remarks=error&value=$e");	 
 }
}
