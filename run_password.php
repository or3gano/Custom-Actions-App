<?php

//connect to database and functions file
include 'db_connect.php'; include 'functions.php';


// username and password sent from form 
$password = trim($_POST['password']);
$username = trim($_POST['username']);

//protect from MySQL injection
$password = stripslashes($password);
$password = mysql_real_escape_string($password);
$username = stripslashes($username);
$username = mysql_real_escape_string($username);

//lookup user in database
$sql = "SELECT * FROM users WHERE email = '$username' and password = '$password'";
$result = mysql_query($sql);

//count the number of rows where the email matches
$count = mysql_num_rows($result);

//if there is exactly one user in the database that matches
if( $count == 1 ) {	
	session_start();
	$_SESSION['user'] = '"'.$username.'"';
	$_SESSION['admin'] = 1;
	header( "location: index.php" );
}

//reload login page with error if login fails
else {
	header("location: password.php?user=".$username."&message=failedlogin");
}

?>