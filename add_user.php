<?php

//connect to database and functions file
include 'db_connect.php'; include 'functions.php';

	$first = $_POST['inputFirstName'];
	$last = $_POST['inputLastName'];
	$email = $_POST['inputEmail3'];
	$admin = $_POST['inputPermission'];
	$pass = $_POST['inputPassword3'];

//creates a new user if it doesn't exist
$query = "SELECT * FROM users WHERE email='$email' ";
$result = mysql_query($query) or die(mysql_error());

if (mysql_num_rows($result) ) {
	$message = "A USER WITH THAT EMAIL ALREADY EXISTS. TRY AGAIN.";
}
else
{
    $query = "INSERT INTO users (first_name, last_name, email, admin, password) VALUES (
				'".addslashes($first)."', 
				'".addslashes($last)."',
				'".addslashes($email)."', 
				'".addslashes($admin)."',
				'".addslashes($pass)."'
			)";
    $result = mysql_query($query) or die(mysql_error());
    
	$message = "USER WAS SUCCESSFULLY ADDED!!!";
}
?>

<script type="text/javascript">
	alert("<?php echo $message; ?>");
	history.back();
</script>