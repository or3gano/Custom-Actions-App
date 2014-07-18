<?php

//connect to database, functions, and session files
include 'db_connect.php'; include 'functions.php'; include 'session_details.php';

//if user isn't logged int then redirect them to login page
if( empty($_SESSION['user']) ){ //if login in session is not set
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Custom Stylesheet-->
	<link rel="stylesheet" type="text/css" href="styles.css" />
	<!-- Bootstrap -->
    <link href="lib/bs/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Optional theme -->
	<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">-->

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Link to jQuery -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="lib/bs/js/bootstrap.min.js"></script>
	<!-- Lightbox js -->
	<script src="lib/lightbox/jquery.lightbox_me.js"></script>
	<!-- Link to custom JavaScript -->
	<script src="lib/script.js"></script>


</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">
					<img style="max-height:18px;" src="https://s3staticfiles.s3.amazonaws.com/logos/1/318f410e-7bcf-4feb-9632-e27b58d17d1a.png">
				</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.php">
							<i class="fa fa-dashboard"></i>
							My Dashboard
							<span class="badge">0</span>
						</a>
					</li>
					<li>
						<a href="ca-queue.php">
							<i class="fa fa-tasks"></i>
							Custom Actions Queue
						</a>
					</li>
					<li>
						<a href="admin-panel.php">
							<i class="fa fa-briefcase"></i>
							Administrator
						</a>
					</li>
				</ul>
				<!-- SEARCH FORM IN HEADER 
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search (Ctrl+Shift+F)">
					</div>
				</form>-->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user" style="margin-right: 10px;"></i>
							<?php echo $_SESSION['user']; ?>
							<span class="caret" style="margin-left: 5px;"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="account.php">
									<i class="fa fa-key"></i>
									My Account
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="logout.php">
									<i class="fa fa-sign-out"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	