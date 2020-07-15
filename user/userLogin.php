
<?php require('..//user/userloginserver.php')
//User login server side page, after giving valid details ?>
<!DOCTYPE html>
<html>
<head>
	<title>Esiglec sales portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 style="text-align:center;"> Already Registered ?  </h1>
<h3 style="text-align:center;"> please login with credentials  </h3>
	<div class="header" style="text-align:center;">
		
	</div>
	
	<form method="get" action="userLogin.php" style="text-align:center;">

		<?php //include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="user_login">Login</button>
		</div>
		<p>
			Not yet a member? <a href="userReg.php">Sign up</a>
		</p>
		<p>
			Homepage ? <a href="home.php">click</a>
		</p>
	</form>


</body>
</html>