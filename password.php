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
					<div class="text-center box-heading">This user requires a password</div>
                    <form action="run_password.php" class="form-horizontal" style="margin-bottom: 0px;" id="login" method="post">
                        <div class="form-group">
                            <label class="col-lg-4 control-label" for="password">Password</label>
                            <div class="col-lg-8">
								<input style="display:none;" id="username" class="form-control" name="username" value=<?php $user = '"'.$_GET[user].'"'; echo $user ?> type="text">
                                <input id="password" class="form-control" name="password" placeholder="Please enter your password" type="text">
                            </div>
                        </div>
                        <div class="col-lg-offset-4" style="margin-bottom: 0px;">
                        </div>
						<div class="well well-sm text-right" style="margin-top: 15px; margin-bottom: 0px;">
							<div>

<!--display failed login message-->
<?php if( isset($_GET[message]) AND $_GET[message] == "failedlogin") { ?>
	<div class="error1">Incorrect password, try again.</div>
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

</body>
</html>