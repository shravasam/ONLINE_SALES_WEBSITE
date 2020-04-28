<?php include('../server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Esiglec admin section</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Admin Login</h2>
	</div>
	
	<form method="post" action="adminLogin.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="admin_login">Login</button>
		</div>
		
	</form>


</body>
</html>
