<?php
session_start();
if(isset($_SESSION['adminUser'])){
	header('Location: user.php');
}

if(file_exists("secret.php"))
{
	require_once("secret.php");
}

$formuser = !isset($_POST['formuser'])?NULL:$_POST['formuser'];
$formpassword = !isset($_POST['formpassword'])?NULL:$_POST['formpassword'];
if(($formuser != ADMINUSER ) || ($formpassword != ADMINPASSWORD ))
{

	include("adminLoginForm.php");
		exit();


}
if (($formuser == ADMINUSER ) && ($formpassword == ADMINPASSWORD ))
{
	$_SESSION['basic_is_logged_in'] = true;
	$_SESSION['adminUser'] = ADMINUSER;
	$_SESSION['adminPassword'] = ADMINPASSWORD;
	$SID = session_id();
	$adminHome = ADMINHOME;
	include($adminHome);
}
?>