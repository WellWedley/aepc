<?php
include 'db.php';
session_start();
$loggedin_session = $_SESSION['email'];
$loggedin_id = $_SESSION['id_anim'];

if (!isset($loggedin_session) || $loggedin_session == null) {
    echo "Go back";
    header("Location: index.php");
}
