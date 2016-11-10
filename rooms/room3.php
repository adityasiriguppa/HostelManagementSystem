<?php
 include("../login_home/session.php");
?>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome</title>

    <!-- Bootstrap Core CSS -->
    <link href="../login_home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../login_home/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../login_home/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	table,th,td{
	border: 2px solid black;
	align:center;
	}
</style>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">NITK HOSTELS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="../login_home/index.php">Menu</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Feedback</a>
                    </li>-->
                    <li class="page-scroll">
                        <a href="../login_home/logout.php">logOut</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="../login_home/img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">WELCOME
<?php
                        require('../student/connect.inc.php');
                        if(!isset($_SESSION['user'])){
                        header('Location: ../student/loginstudent.php'); // Redirecting To Home Page
                        }
                        $var1=$_SESSION['user'];
                        $result=mysql_query("SELECT sname from student where susername='$var1'");
                        $details = mysql_fetch_array($result);
                        $savedName = $details["sname"];
                        echo $savedName;
                        ?>						
						</span>
                        <hr class="star-light">
                        <!--<span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>-->
                    </div>
                </div>
            </div>
        </div>
    </header>

<h1>Available Rooms</h1>
<div style="margin-left:500px";>
<?php
$result1 = mysql_query("select roomno,status from rooms where status=0 and roomno>300 and roomno<400");
/*if($result1){echo "1";}*/
if (mysql_num_rows($result1) > 0) {
    echo "<table cellspacing='3' cellpadding='5' width='50%' ><tr ><th>RoomNo</th><th>status</th></tr>";
    // output data of each row
    while($row = mysql_fetch_array($result1)) {
        echo "<tr><td align='center'>".$row["roomno"]."</td><td align='center'>Available</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
	
}
/*echo "<h2>Select a Room</h2>";
$query = mysql_query("select roomno from rooms where status=0");


echo '<select name="DROP DOWN NAME">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
	echo '1';
   echo '<option value="'.$row['roomno'].'">'.$row['roomno'].'</option>';
}

echo '</select>';// Close your drop down box
echo '  <button class="dropbtn">SELECT</button>';*/

?>
</div>
<form name="frmdropdown" method="post" action="new1.php">
     <center>
            <h2 align="center">Allotment</h2>
         
            <strong> Select Room : </strong> 
            <select name="empName"> 
               <option value=""> ---------------------- </option> 
            <?php
  
                 $dd_res=mysql_query("Select roomno from rooms where status=0 and roomno>300 and roomno<400");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
              </select>
     <input type="submit" name="find" value="Select"/> 
     <br><br>
</body>	
	<!--<footer class="text-center">
        <div class="footer-above">
            <div class="container" style="margin-left:500px">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Room No-D 111
                            <br>MT-2</p>
                    </div>
				</div>
			</div>
		</div>	
		</footer>-->


</html>