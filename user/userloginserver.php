

<?php 
session_start();
/*
/* This page will establish user registration and login from the server side, when user click on submit button it will hit the $POST method */
//here mp5 used to encrypt the password 
	

	// variable declaration
	$username = "";
	$email    = "";$password ="";
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$connect = mysqli_connect('127.0.0.1', 'root', '12581258', 'registration');
    if (isset($POST['user_login'])) {
		$username = mysqli_real_escape_string($connect, $_POST['username']);
		$password = mysqli_real_escape_string($connect, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query2 = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($connect, $query2);
			//$query3 = "SELECT * FROM users";
			//$result3 = mysqli_query($connects,$query3);	
			//echo " $result3";
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
				$_SESSION['success'] ="You are now logged in";
			echo "<h1>welcom".$_SESSION['username']."</h1>";
			
				header('location: ..//index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
		
}	


?>