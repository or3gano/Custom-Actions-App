<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title" style="display: inline;">
			<i class="fa fa-folder-open"></i>
			User Accounts
		</h3>
		<a href="#" role="button" class="btn btn-primary btn-right-heading" >
			<i class="fa fa-plus"></i>
			Add User
		</a>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Access Level</th>
					<th></th>
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
							else { echo "<td></td>"; };
						?>
							<td>
								<div class="btn-group">
									<button type="button" class="btn btn-primary">
										Status
									</button>
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</td>
							<td>
								<a href="#" role="button" class="btn btn-primary">Notes</a>
							</td>
						</tr>
					<?php } ?>
			</tbody>
		</table>
	</div>
</div>