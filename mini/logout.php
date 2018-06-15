<?php
    session_start();
	$mysqli = new mysqli("localhost", "root", "", "users");
    $_SESSION['loggedIn'] = false;
    header("Location: start.php");
	// remove all session variables
	session_unset(); 
	// destroy the session 
	session_destroy(); 
?>