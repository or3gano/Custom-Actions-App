<?php

//connect to database, functions, and session files
include 'db_connect.php'; include 'functions.php'; include 'session_details.php';

//if user isn't logged int then redirect them to login page
if( empty($_SESSION['user']) ){ //if login in session is not set
    header("Location: login.php");
}

//includes the csv import page
include 'import.php' ;


echo "<a href='logout.php'>logout</a>";

?>