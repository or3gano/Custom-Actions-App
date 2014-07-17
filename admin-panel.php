<?php include "header.php"; ?>

<div class="full-width-container" id="mainContainer">
	<h1 class="heading-label">
		<span class="label label-primary">
			<i class="fa fa-briefcase"></i>
			Administrator Panel
		</span>
	</h1>
	
	<div class="panel panel-primary">
		<div class="panel-body">
			<ul class="nav nav-pills">
				<li  id="admin-subnav1">
					<a href="javascript:;">
						<i class="fa fa-users"></i>
						Categories
						<span class="badge">0</span>
					</a>
				</li>
				<li id="admin-subnav2">
					<a href="javascript:;">
						<i class="fa fa-users"></i>
						Users
						<span class="badge">
							<?php
								$result = mysql_query('SELECT COUNT(1) FROM users');
								$num_rows = mysql_result($result, 0, 0);
								echo $num_rows;
							?>
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="cat-table"><?php include "categories.php" ?></div>
	<div id="users-table"><?php include "users.php" ?></div>
	
</div>

<?php include "footer.php"; ?>