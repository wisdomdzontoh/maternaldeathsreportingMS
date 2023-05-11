<?php
//include('dbcon.php');
session_start(); // Start the session

// Unset all of the session variables
unset($_SESSION['username']);

// Redirect to the login page or any other page you wish to redirect
header("Location: index.php");
//exit();
?>

