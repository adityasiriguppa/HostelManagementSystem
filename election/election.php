<?php
include("../login_home/session.php");
$var1=$_SESSION['user'];
$q=mysql_query("select vstatus from student where susername='$var1'");
$d = mysql_fetch_array($q);
                        $sN = $d["vstatus"];
						
if($sN)
{
	echo"<script>
						alert('You vote has been already registered');
						window.location.href='../login_home/index.php';
						</script>";
}
else
{	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$des=$_POST["result"]; 
		mysql_query("update student set vstatus=1 where susername='$var1'");
		mysql_query("update election set count=count+1 where cname='$des'");
		/*header('Location: index.php');*/
		echo "<script>
						alert('You vote has been registered');
						window.location.href='../login_home/index.php';
						</script>";
	}

}
?>