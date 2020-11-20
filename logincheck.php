<?php
include "db.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mdp = mysqli_real_escape_string($con, $_POST['mdp']);
    $sql = "SELECT mail_anim,id_anim FROM animateurs WHERE mail_anim='$email' and mdp_anim='$mdp'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    //$active = $row['active'];
    $count = mysqli_num_rows($result);
    if ($count == 1) {
		$_SESSION['email'] = $email;
		$_SESSION['id_anim'] = $row['id_anim'] ; 
        header("location: welcome.php");
	}
	else{
		
        header("location: index.php?remark_login=failed");
	}
}
