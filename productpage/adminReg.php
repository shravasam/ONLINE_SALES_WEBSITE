<?php include('../server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Esigelec sales portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
<H1> admin SECTION</H1>
		<h2>admin SIGN UP</h2>
	</div>
	
	<form method="post" action="adminReg.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Re-type password</label>
			<input type="password" name="password_2">
		</div>
			

		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_admin">Register</button>
		</div>
		<p>
			Already signed up? <a href="adminLogin.php">Sign in</a>
		</p>
		
	</form>
</body>
</html>
