
<?php include('server.php')
//user registration server side page.
?>

<!DOCTYPE html>
<html>
<head>
	<title>Esigelec sales portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h1 style="text-align:center;"> Already not Registered ?  </h1>
<h3 style="text-align:center;"> Sign up  with credentials  </h3>
	

	</div>
	
	<form method="post" action="userReg.php" style="text-align:center;">

		<?php 
		//include('errors.php'); ?>

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
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already signed up? <a href="userLogin.php">Sign in</a>
		</p>
		<p>
			homepage ? <a href="home.php">click</a>
		</p>
	</form>
</body>
</html>