<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";$password ="";

	$image = "";
	$category = "";
	$product = "";
	$price = "";	
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$connect = mysqli_connect('127.0.0.1', 'root', '12581258', 'server2');
//echo "<h1>welcom admin  ".$_SESSION['username']."</h1>";


if (isset($_POST['admin_login'])) {
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
			$query2 = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$results = mysqli_query($connect, $query2);
			$query3 = "SELECT * FROM admin";
			$result3 = mysqli_query($connect,$query3);	
			
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
				$_SESSION['success'] ="You are now logged in";
			//echo "<h1>welcom".$_SESSION['username']."</h1>";
			
				header('location:product.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
		
}	
if (isset($_POST['add_product'] )) {


		// receive all input values from the form
		$image = mysqli_real_escape_string($connect, $_POST['image']);
		$category = mysqli_real_escape_string($connect, $_POST['category']);	
		$product = mysqli_real_escape_string($connect, $_POST['product']);
		$price = mysqli_real_escape_string($connect, $_POST['price']);
			$query = "INSERT INTO basket(image,category,product, price) 
			VALUES('$image','$category', '$product','$price')";	 
			mysqli_query($connect, $query);
			
			//$_SESSION['category'] = $category;
			$_SESSION['success'] = "added";
			header('location:product.php');
		}

?>		
			<p>
				<a href= "..//logout.php"> logout</a>
			</p