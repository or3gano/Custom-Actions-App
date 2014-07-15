<?php

//connect to database and functions file
include 'db_connect.php'; include 'functions.php';

	$email = $_POST['username'];
	$first = $_POST['first_name'];
	$last = $_POST['last_name'];

//creates a new user if it doesn't exist
$query = "SELECT * FROM users WHERE email='$email' ";
$result = mysql_query($query) or die(mysql_error());

if (mysql_num_rows($result) )
{
    header("Location: register.php?message=userexists");
}
else
{
    $query = "INSERT INTO users (email, first_name, last_name) VALUES (
				'".addslashes($email)."', 
				'".addslashes($first)."', 
				'".addslashes($last)."'
			)";
    $result = mysql_query($query) or die(mysql_error());
     
    header("Location: login.php?message=newuser");
}

?>