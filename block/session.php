<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = @mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("dbms", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select susername from student where susername='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['susername'];
if(!isset($_SESSION['user'])){
mysql_close($connection); // Closing Connection
header('Location: ../student/loginstudent.php'); // Redirecting To Home Page
}
?>