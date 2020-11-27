<?php

include 'db.php';

$loggedin_session = $_SESSION['email'];
$loggedin_id = $_SESSION['id_anim'];
$loggedin_name = $_SESSION['prenom_anim'];

$loggedin_id? "header('location:index.php')": "Retour"; 
/*
if (!isset($loggedin_session) || $loggedin_session == null) {
    echo "Go back";
    header("Location: index.php");
}
*/