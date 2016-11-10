<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../student/loginstudent.php"); // Redirecting To Home Page
}
?>