<?php
require('../student/connect.inc.php');
session_start();
if(!isset($_SESSION['user'])){
header('Location: ../student/loginstudent.php'); // Redirecting To Home Page
}
echo "hello World";
?>