<?php

include 'db.php';

$loggedin_session = $_SESSION['email'];
$loggedin_id = $_SESSION['id_tut'];
$loggedin_adr = $_SESSION['adr_tut'] ;
$loggedin_id ? "header('location:index.php')" : "Retour";

if (!isset($loggedin_session) || $loggedin_session == null) {
    echo "Go back";
    header("Location: index.php");
}
