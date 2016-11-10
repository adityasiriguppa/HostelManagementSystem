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
                        <a href="#portfolio">Menu</a>
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

<h1>Room Allotment</h1>
<div>
<table border="1" width="100%" id="table5" cellpadding="5">
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">Room No</font></b></td>
								<td align="center" width="10%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">Status</font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">Selection</font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">NAME</font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">101</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">
								
								
								</font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">102</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">103</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">104</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">105</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">106</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">107</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">108</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">109</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">110</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">111</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">112</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">113</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">114</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
							<tr>
								<td align="left" width="25%">
								<p align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt">115</font></b></td>
								<td align="center" width="25%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
								<td align="center" width="15%"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"><button>select</button></font></b></td>
								<td width="24%" align="center"><b>
								<font face="Tahoma" color="#000000" style="font-size: 11pt"></font></b></td>
							</tr>
</div>
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