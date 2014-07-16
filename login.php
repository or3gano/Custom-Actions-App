<?php session_start(); if(session_is_registered(user) || session_is_registered(admin)){ header("Location: index.php");} ?>
<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="login-styles.css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body class="login-body">

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel panel-default">

        <div class="panel-body">
            <div class="text-center">
                <img style="margin: 10px auto;" src="https://s3.amazonaws.com/s3staticfiles/logos/1/5c54c85f-e9b4-4c33-9056-d9a544554633.png">
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <form action="run_login.php" class="form-horizontal" style="margin-bottom: 0px;" id="login" onsubmit="return validateForm()" method="post">
                        <div class="form-group">
                            <label class="col-lg-4 control-label" for="username">Email Address</label>
                            <div class="col-lg-8">
                                <input id="username" class="form-control" name="username" placeholder="Please enter your email" type="text" data-original-title="Username is a required field." title="">
                            </div>
                        </div>
                        <div class="col-lg-offset-4" style="margin-bottom: 0px;">
							<a style="margin-left:484px; text-decoration:none;" class="btn btn-link" href="register.php" ><i class="fa fa-key"></i>Register</a>
                        </div>
						<div class="well well-sm text-right" style="margin-top: 15px; margin-bottom: 0px;">
							<div>

<!--display failed login message-->
<?php if( isset($_GET[message]) AND $_GET[message] == "failedlogin") { ?>
	<div class="error1">Incorrect email, try again.</div>
<?php } ?>
<!--display logout message-->
<?php if( isset($_GET[message]) AND $_GET[message] == "logout") { ?>
	<div class="error1" style="color:green;">You have successfully logged out.</div>
<?php } ?>
<!--display new user message-->
<?php if( isset($_GET[message]) AND $_GET[message] == "newuser") { ?>
	<div class="error1" style="color:green;">User Created! You may now login.</div>
<?php } ?>
								<button name="Login" class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i>Log In</button>
							</div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
//validates the form
function validateForm() {
    var x = document.forms["login"]["username"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Please enter a valid e-mail address");
        return false;
    }
}
</script>

</body>
</html>