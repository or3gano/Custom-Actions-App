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
					<div class="text-center box-heading">Register a new user</div>
                    <form action="run_register.php" class="form-horizontal" style="margin-bottom: 0px;" id="register" onsubmit="return validateForm()" method="post">
						<div class="form-group">
							<label class="col-lg-4 control-label" for="username">Email Address</label>
							<div class="col-lg-8">
								<input id="username" class="form-control" name="username" placeholder="Please enter your email" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-4 control-label" for="first_name">First Name</label>
							<div class="col-lg-8">
								<input id="first_name" class="form-control" name="first_name" placeholder="Please enter your First Name" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-4 control-label" for="last_name">Last Name</label>
							<div class="col-lg-8">
								<input id="last_name" class="form-control" name="last_name" placeholder="Please enter your Last Name" type="text">
							</div>
						</div>
						<div class="well well-sm text-right" style="margin-bottom: 0px;">

<!--display duplicate email message-->
<?php if( isset($_GET[message]) AND $_GET[message] == "userexists") { ?>
	<div class="error1">Email Already exists, use a different email or <a href="login.php" style="color:red">login</a>.</div>
<?php } ?>
							<button name="Register" class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i>Register User</button>
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
    var x = document.forms["register"]["username"].value;
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