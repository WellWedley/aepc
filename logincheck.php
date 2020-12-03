<?php
session_start() ; 
include "./db/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mdp = mysqli_real_escape_string($con, $_POST['mdp']);
    $pseudo=mysqli_real_escape_string($con, $_POST['email']);
    $sql = "SELECT *
	FROM tuteurs 
	WHERE mail_tut='$email'    
    OR pseudo_tut='$email'
    AND mdp_tut='$mdp'";
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
    
    if ($count == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['pseudo']=$row['pseudo_tut'];
        $_SESSION['id_tut'] = $row['id_tut'];
        $_SESSION['prenom_tut'] = $row['prenom_tut'];
        $_SESSION['nom_tut'] = $row['nom_tut'];
        $_SESSION['adr_tut'] = $row['adr_tut'];
        $_SESSION['num_tut'] = $row['num_tut']; 
      

        header("location:welcome.php");
    } else {
        $e=mysqli_error($con);
        header("location: ./index.php?remarks=error&value=$e");	
        header("location: index.php?remark_login=failed");
    }
}


