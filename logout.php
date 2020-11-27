<?php
session_start() ; 
include 'session.php' ; 
if (session_destroy()) {
    header("Location: index.php"); 
}
