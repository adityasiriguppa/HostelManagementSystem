<?php
require('../student/connect.inc.php');
session_start();
if(!isset($_SESSION['user'])){
header('Location: ../student/loginstudent.php'); // Redirecting To Home Page
}
$var1=$_SESSION['user'];
$result=mysql_query("SELECT * from student");
$details = mysql_fetch_array($result);
//$savedName = $details["sname"];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
echo $details;
?>
