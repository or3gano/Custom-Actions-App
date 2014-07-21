<!-- Users Panel -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title" style="display: inline;">
			<i class="fa fa-folder-open"></i>
			User Accounts
		</h3>
		
		<!-- Add User button -->
		<span style="font-size:12px;font-wieght:normal;color:#777">(click on user to edit)</span>
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
						$id = $row['user_id'];
						$firstname = $row['first_name'];
						$lastname = $row['last_name'];
						$email = $row['email'];
						$admin = $row['admin'];
						?>
						
						<tr id="<?php echo $id; ?>" class="edit_tr" >
							<td class="edit_td">
								<span id="first_<?php echo $id ?>" class="text">
									<?php echo $firstname ?>
								</span>
								<input type="text" value="<?php echo $firstname; ?>" class="editbox" id="first_input_<?php echo $id; ?>" />
							</td>
							<td class="edit_td">
								<span id="last_<?php echo $id ?>" class="text">
									<?php echo $lastname ?>
								</span>
								<input type="text" value="<?php echo $lastname; ?>" class="editbox" id="last_input_<?php echo $id; ?>" />
							</td>
							<td class="edit_td">
								<span id="email_<?php echo $id ?>" class="text">
									<?php echo $email ?>
								</span>
								<input type="text" value="<?php echo $email; ?>" class="editbox" id="email_input_<?php echo $id; ?>" />
							</td>
							<?php if($row['admin']==1) {
								echo "<td style=\"color:red;\">Administrator<br /><a href=\"\" style=\"font-size:11px;\">Reset Password</a></td>";
								}
								else { echo "<td>User</td>"; };
							?>
							<td>
								<form>
									<button type="submit" role="button" class="btn btn-primary" id="edit_user_btn" method="post" name="edit_user_btn" >
										<i class="fa fa-edit"></i>
										Edit Permission Level
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
		<form class="form-horizontal" role="form" action="add_user.php" method="post">
			<div class="form-group">
				<label for="inputFirstName" class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First Name" required />
				</div>
			</div>
			<div class="form-group">
				<label for="inputLastName" class="col-sm-2 control-label">Last Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputLastName" name="inputLastName" placeholder="Last Name" required />
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Email" required />
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
			<a href="javascript:;" id="cancel_add" class="cancel-link">Cancel</a>
			<div class="form-group" style="float:right;">
				<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>