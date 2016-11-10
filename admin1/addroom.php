<?php
  require('../student/connect.inc.php');
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$des=$_POST["number"];
		$res=mysql_query("select roomno from rooms where roomno='$des'");
		if(mysql_num_rows($res)==0)
		{
		mysql_query("insert into rooms values('$des',0)");
		/*header('Location:../login_home/index.php');*/
		echo "<script>
						alert('Your room is successfully added ');
						window.location.href='user.php';
						</script>";

		}


else
{

	/*echo "<script language='javascript'>";
	echo "alert('you have been already allotted a room')";
	echo "</script>";
						header('Location: ../login_home/index.php');*/
						echo "<script>
						alert('You have already added this room');
						window.location.href='user.php';
						</script>";
}
}

?>
