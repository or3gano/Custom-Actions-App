<?php

//connect to database, functions, and session files
include 'db_connect.php'; include 'functions.php'; include 'session_details.php';

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<script src="jquery-1.11.1.min.js"></script>
<script>
$(function(){

    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.nav a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('highlight');
            }
        });

});
</script>

</head>

<body>

<div id="header">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="full-width-container">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
					<img style="max-height:18px;" src="https://s3staticfiles.s3.amazonaws.com/logos/1/318f410e-7bcf-4feb-9632-e27b58d17d1a.png">
				</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.php">
							<i class="fa fa-tasks"></i>
							Custom Actions Queue
						</a>
					</li>
				</ul>
				<div class="navbar-form navbar-left" style="padding:0;margin: 5px 30px;">
					<div class="form-group" style="padding:0;">
						<input id="header-search" type="text" class="form-control" style="background-color:#fff;" placeholder="Search (Ctrl+Shift+F)">
					</div>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle">
							<i class="fa fa-user" style="margin-right: 10px;"></i>
							<?php echo $_SESSION['user']; ?>
							<b class="caret" style="margin-left: 5px;"></b>
						</a>
						<ul class="dropdown-menu">
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
</div>