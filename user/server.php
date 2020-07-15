
<?php 
/*
/* This page will establish user registration and login from the server side, when user click on submit button it will hit the $POST method */
//here mp5 used to encrypt the password 
	//session_start();

	// variable declaration
	$username = "";
	$email    = "";$password ="";
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$connect = mysqli_connect('127.0.0.1', 'root', '12581258', 'registration');

if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($connect, $_POST['username']);
		$email = mysqli_real_escape_string($connect, $_POST['email']);	
		
		$password_1= mysqli_real_escape_string($connect, $_POST['password_1']);
		$password_2= mysqli_real_escape_string($connect, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "password is required"); }
		//if (empty($password_2)) { array_push($errors, "password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_2);//encrypted the password before saving in the database
			$query2 = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($connect, $query2);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "user section";
			header('location: userLogin.php');
		}

}

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
			
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
		
}	


?>