<?php
include("../login_home/session.php");
$result=mysql_query("SELECT roomno from rooms");
                        $details = mysql_fetch_array($result);
                        $savedName = $details["roomno"];
                        echo $savedName;


$result1 = mysql_query("select roomno from rooms where status=0");
if($result1){echo "1";}
  
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$des=$_POST["empName"]; 
	echo $des;

}


?>
<html>
 <body>
     <form name="frmdropdown" method="post" action="#">
     <center>
            <h2 align="center">Employee Data</h2>
         
            <strong> Select Designation : </strong> 
            <select name="empName"> 
               <option value=""> -----------ALL----------- </option> 
            <?php
  
                 $dd_res=mysql_query("Select roomno from rooms");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
              </select>
     <input type="submit" name="find" value="find"/> 
     <br><br>
	 </body>
</html>