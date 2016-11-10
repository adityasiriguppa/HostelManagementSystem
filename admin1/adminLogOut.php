<?php
session_start();
session_destroy();
echo "you have logged out succesfully";
setcookie('formuser');
header("Location:adminLoginForm.php");
?>