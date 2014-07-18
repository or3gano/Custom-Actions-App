<!-- Users Panel -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title" style="display: inline;">
			<i class="fa fa-folder-open"></i>
			User Accounts
		</h3>
		
		<!-- Add User button -->
		<a href="javascript:;" role="button" class="btn btn-primary btn-right-heading" id="add_user_btn">
			<i class="fa fa-plus"></i>
			Add User
		</a>
	</div>
	

	<!-- Users Table -->
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Access Level</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					// Get user info from the users table
					$sql = "SELECT * FROM users";
					$users = mysql_query($sql);
					
					// Display user info
					while($row = mysql_fetch_array($users)) { 
						echo "<tr>";
							echo "<td>".$row['first_name']."</td>";
							echo "<td>".$row['last_name']."</td>";
							echo "<td>".$row['email']."</td>";
							if($row['admin']==1) {
								echo "<td style=\"color:red;\">Administrator</td>";
							}
							else { echo "<td>User</td>"; };
						?>
							<td>
								<form>
									<button type="submit" role="button" class="btn btn-primary" id="edit_user_btn" method="post" name="edit_user_btn" value="<?php echo $row['email']; ?>">
										<i class="fa fa-edit"></i>
										Edit User
									</button>
								</form>
							</td>
						</tr>
					<?php } ?>
			</tbody>
		</table>
	</div>
</div>


<!-- Add User Lightbox form -->
<div id="add_user" class="panel panel-default lightbox">
	<div class="panel-body">
		<div class="page-header" style="text-align: center;">
			<h2>Add New User</h2>
		</div>
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputFirstName" class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputFirstName" placeholder="First Name" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputLastName" class="col-sm-2 control-label">Last Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
				</div>
			</div>
			<div class="form-group" style="margin-left: 28%;margin-bottom: 25px;">
				<label for="inputPermission" class="control-label" style="margin-bottom: 10px;">
					Select Permission Level
				</label>
				<select style="display:block;margin-left:10px;" id="inputPermission" required>
					<option value="" disabled selected style="display:none;">Select</option>
					<option value="user"><a href="javascript:;" id="user_option">User</a></option>
					<option value="admin"><a href="javascript:;" id="admin_option">Administrator</a></option>
				</select>
			</div>
			<div class="form-group" id="add_user_pw">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
				</div>
			</div>
			<a href="javascript:;" id="cancel_add" class="cancel-link">Cancel</a>
			<div class="form-group" style="float:right;">
				<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>


<!-- Edit User Lightbox -->
<div id="edit_user" class="panel panel-default lightbox">
	<div class="panel-body">
		<div class="page-header" style="text-align: center;">
			<h2>Edit User</h2>
		</div>
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputFirstName2" class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputFirstName2" placeholder="First Name" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputLastName2" class="col-sm-2 control-label">Last Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputLastName2" placeholder="Last Name" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail2" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" id="inputEmail2" placeholder="Email" required>
				</div>
			</div>
			<div class="form-group" style="margin-left: 28%;margin-bottom: 25px;">
				<label for="inputPermission2" class="control-label" style="margin-bottom: 10px;">
					Select Permission Level
				</label>
				<select style="display:block;margin-left:10px;" id="inputPermission2" required>
					<option value="" disabled selected style="display:none;">Select</option>
					<option value="user"><a href="javascript:;" id="user_option2">User</a></option>
					<option value="admin"><a href="javascript:;" id="admin_option2">Administrator</a></option>
				</select>
			</div>
			<div class="form-group" id="edit_user_pw">
				<label for="inputPassword2" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword2" placeholder="Password" required>
				</div>
			</div>
			<a href="javascript:;" id="cancel_edit" class="cancel-link">Cancel</a>
			<div class="form-group" style="float:right;">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>