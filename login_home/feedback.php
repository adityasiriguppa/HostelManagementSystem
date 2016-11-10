<?php
include("../login_home/session.php");
$var1=$_SESSION['user'];
$q=mysql_query("select sroll from student where susername='$var1'");
$d = mysql_fetch_array($q);
                        $sN = $d["sroll"];
						
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$des=$_POST["lastname"]; 
		mysql_query("insert into feedback values('$des','$sN')");
		header('Location: index.php');
	}


?>