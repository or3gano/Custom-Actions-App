<?php

//connect to database and functions file
include 'db_connect.php'; include 'functions.php';

if($_POST['user_id'])
{
$id=mysql_escape_String($_POST['user_id']);
$firstname=mysql_escape_String($_POST['first_name']);
$lastname=mysql_escape_String($_POST['last_name']);
$email=mysql_escape_String($_POST['email']);
$sql = "UPDATE users SET first_name='$firstname',last_name='$lastname',email='$email' WHERE user_id='$id'";
mysql_query($sql);
}
?>