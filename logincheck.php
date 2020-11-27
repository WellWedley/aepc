<?php
session_start() ; 
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mdp = mysqli_real_escape_string($con, $_POST['mdp']);
    $pseudo=mysqli_real_escape_string($con, $_POST['email']);
    $sql = "SELECT *
	FROM animateurs 
	WHERE mail_anim='$email'    
    OR pseudo_anim='$email'
    AND mdp_anim='$mdp'";
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['id_anim'] = $row['id_anim'];
        $_SESSION['prenom_anim'] = $row['prenom_anim'];
        $_SESSION['nom_anim'] = $row['nom_anim'];
        $_SESSION['statut_anim'] = $row['statut_anim'];

        header("location:welcome.php");
    } else {

        header("location: index.php?remark_login=failed");
    }
}
