<?php  

$db_name = "ecoabsor_ca_app";
$db_user = "ecoabsor_caapp";
$pass = "IPN+k?pGO1U6";


//connect to the database 
$connect = mysql_connect("localhost",$db_user,$pass); 
mysql_select_db($db_name,$connect); //select the table 

if (!$connect) {
die('Could not connect to MySQL: ' . mysql_error());
}

//
?>