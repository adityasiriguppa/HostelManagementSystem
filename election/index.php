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
                        <span class="name">WELCOME to Hostel Council Elections</span>
					</div>
				</div>
			</div>
		</div>
	</header>
						<form action="election.php" method="post" align="center">
  <p style="font-size:30px"><input type="radio" name="browser" onclick="myFunction(this.value)" value="Sachin">     Sachin</p>
  <p style="font-size:30px"><input type="radio" name="browser" onclick="myFunction(this.value)" value="Raj">      Raj</p>
  <p style="font-size:30px"><input type="radio" name="browser" onclick="myFunction(this.value)" value="Jash">   Jash</p>
  <p style="font-size:30px"><input type="radio" name="browser" onclick="myFunction(this.value)" value="Mike">       Mike	</p>
  <br><br>

   <input type="text" id="result" name="result" style="margin-left:100px;">
  <input type="submit" class="btn btn-success btn-lg" value="Submit form">
</form>

<script>
function myFunction(browser) {
    document.getElementById("result").value = browser;
}
</script>

	</body>
	</html>
