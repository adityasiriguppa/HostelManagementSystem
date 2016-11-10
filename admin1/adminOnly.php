<?php
if(!isset($_SESSION))
session_start();
if(   (!isset($_SESSION['adminUser'])) || (!isset($_SESSION['adminPassword'])) ) {
	include_once("adminLogin.php");
	exit;
}
if(file_exists("secret.php")) {
	require_once("secret.php");
}
if( ($_SESSION['adminUser'] != ADMINUSER) || ($_SESSION['adminPassword'] != ADMINPASSWORD) ) {
	include_once("adminLogin.php");
	exit;
}else
{
?>

<?php 
}
?>