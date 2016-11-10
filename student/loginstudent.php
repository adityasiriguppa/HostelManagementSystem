<?php
require('connect.inc.php');
session_start();
if(isset($_SESSION['user'])){
	header('Location: ../login_home/index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Student</title>
    <link href="login.css" rel='stylesheet' type='text/css'/>
    <link rel="shortcut icon" type="image/x-icon" href="img/nitk.jpg"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/w3-theme-black.css">
<link rel="stylesheet" href="../css/css.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {padding: 12px;}
.w3-navbar li a {
    padding-top: 20px;
    padding-bottom: 20px;
}
</style>

</head>
<body>
<div>
<ul class="w3-navbar w3-theme w3-top w3-left-align w3-large" style="z-index:4;">
  <li class="w3-opennav w3-right w3-hide-large">
    <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
  </li>
  <!--<li><a href="#" class="w3-theme-l1">Logo</a></li>-->
  <li class="w3-hide-small"><a href="../dbms.php" class="w3-hover-white" style="margin-left:500px">HOME</a></li>
  <li class="w3-hide-small"><a href="../admin1/adminLogin.php" class="w3-hover-white">ADMIN</a></li>
 <li class="w3-hide-small"><a href="../student/loginstudent.php" class="w3-hover-white">STUDENT</a></li>
  <li class="w3-hide-small"><a href="../news.html" class="w3-hover-white">NEWS</a></li>
  <li class="w3-hide-small"><a href="../contact.html" class="w3-hover-white">CONTACT</a></li>
  <!--<li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">ClIENTS</a></li>-->
  <!--<li class="w3-hide-small"><a href="#" class="w3-hover-white">COMPLAINTS/FEEDBACK</a></li>-->
</ul>
</div>

<td height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="../dbms.php"><font color="#FFFFFF" style="font-size:20px">Home</font></a></td>
                            </tr>


<div class="login-form" style="margin-top:100px;">
    <!--<h1>Sign In Student</h1>-->

    <h2><a href="signupstudent.php">Create Account</a></h2>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <li>
            <input type="text" class="text" name="user" placeholder="User Name"><a href="#" class=" icon user"></a>
        </li>
        <li>
            <input type="password" name="password" placeholder="Password"><a href="#" class=" icon lock"></a>
        </li>
        <div class="forgot">
            <h3><a href="forgotstudent.php">Forgot Password?</a></h3>
            <input type="submit" value="Sign In"> <a href="#?user='$user'"  class=" icon arrow"></a>                                                                                                                                                                                                                                 </h4>
        </div>
    </form>
</div>
<?php
if(isset($_POST['user'])&& isset($_POST['password']))
{   if(!empty($_POST['user'])&&!empty($_POST['password']))
    {
            $user=$_POST['user']; $password=$_POST['password'];
			$md5password=md5($password);
        $q1="SELECT susername,spassword,sroll FROM student WHERE susername='$user' AND spassword='$md5password'";
        $qr=mysql_query($q1);
        if(mysql_num_rows($qr)==1)
        {      $row=mysql_fetch_array($qr);




			/*	session_start();*/
                $_SESSION['basic_is_logged_in'] = true;
                $_SESSION['user'] = $user;

                $SID = session_id();

                header("Location:../login_home/index.php");

        }
        else
        {


          echo '<script language="javascript">';
			echo 'alert("Wrong password or user")';
			echo '</script>';


        }
    }
}
?>
<footer>

</footer>
</body>
</html>
