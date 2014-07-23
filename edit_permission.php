<?php

include 'header.php';

$id = $_GET[user];
$sql = "SELECT * FROM users WHERE user_id=".$id;
$query = mysql_query($sql);
$user = mysql_fetch_array($query);
$firstname = $user['first_name'];
$lastname = $user['last_name'];
$email = $user['email'];
$admin = $user['admin'];

?>


<div id="change_permission" class="panel panel-default">
	<div class="panel-body">
		<div class="page-header" style="text-align: center;">
			<h2>Change User Permission</h2>
		</div>
		<form class="form-horizontal" role="form" action="run_permission.php" method="post">
			<div class="form-group">
				<label for="inputFirstName" class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="<?php echo $firstname; ?>" readonly />
				</div>
			</div>
			<div class="form-group">
				<label for="inputLastName" class="col-sm-2 control-label">Last Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputLastName" name="inputLastName" placeholder="<?php echo $lastname; ?>" readonly />
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="<?php echo $email; ?>" readonly />
				</div>
			</div>
			<div class="form-group" style="margin-left: 28%;margin-bottom: 25px;">
				<label for="inputPermission" class="control-label" style="margin-bottom: 10px;">
					Select Permission Level
				</label>
				<select style="display:block;margin-left:10px;" id="inputPermission" name="inputPermission" required>
					<option value="" disabled selected style="display:none;">Select</option>
					<option value="0"><a href="javascript:;" id="user_option">User</a></option>
					<option value="1"><a href="javascript:;" id="admin_option">Administrator</a></option>
				</select>
			</div>
			<div class="form-group" id="add_user_pw">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword3" name="inputPassword3" placeholder="Password" />
				</div>
			</div>
			<a href="admin-panel.php" id="cancel_add" class="cancel-link">Cancel</a>
			<div class="form-group" style="float:right;">
				<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>


<?php include 'footer.php'; ?>