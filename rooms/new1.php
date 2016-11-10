<?php
include("../login_home/session.php");
$var1=$_SESSION['user'];
$q=mysql_query("select roomno from student where susername='$var1'");
$d = mysql_fetch_array($q);
                        $sN = $d["roomno"];
						echo $sN;
						
if(!$sN)
{
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$des=$_POST["empName"]; 
		mysql_query("update rooms set status=1 where roomno='$des'");
		mysql_query("update student set roomno='$des' where susername='$var1'");
		/*header('Location:../login_home/index.php');*/
		echo "<script>
						alert('Your room is successfully allotted ');
						window.location.href='../login_home/index.php';
						</script>";
	}
}
else
{
	
	/*echo "<script language='javascript'>";
	echo "alert('you have been already allotted a room')";
	echo "</script>";
						header('Location: ../login_home/index.php');*/
						echo "<script>
						alert('You have been already been allotted a room');
						window.location.href='../login_home/index.php';
						</script>";
}


?>