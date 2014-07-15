<?php

//connect to database and functions file
include 'db_connect.php'; include 'functions.php';


// username and password sent from form 
$username = trim($_POST['username']);

//protect from MySQL injection
$username = stripslashes($username);
$username = mysql_real_escape_string($username);
$sql = "SELECT * FROM users WHERE email = '$username'";
$result = mysql_query($sql);
$userarray = mysql_fetch_array($sql);

//count the number of rows where the email matches
$count = mysql_num_rows($result);

//if there is exactly one user in the database that matches and checks if they are an admin
if( $count == 1 ) {	
	$admin = mysql_query("SELECT admin FROM users WHERE email = '$username'");
	$admin = mysql_fetch_array($admin);
	
//if user is an admin then send them to password request page, sends them to index if not
	if(  $admin[0] ) {
		header( "location: password.php?user=".$username );
	}
	else {
		session_start();
		$_SESSION['user'] = '"'.$username.'"';
		$_SESSION['admin'] = 0;
		header( "location: index.php" );
	}
}

//reload login page with error if login fails
else {
	header("location: login.php?message=failedlogin");
}

?>