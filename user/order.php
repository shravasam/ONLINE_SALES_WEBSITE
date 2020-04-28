//user order page after choosing the products from the his basket. it will store the values in the database @orders in basket.db
<?php 
	session_start();

	// variable declaration
	//$user="";
	//$category = "";
	//$product = "";
	//$quantity = "";
	//$price = "";
	//$messae= "";
	//$errors = array(); 
	//$_SESSION['success'] = "";

	// connect to database

	$connect = mysqli_connect('127.0.0.1', 'root', '12581258', 'customer');
	if ($connect->connect_error) {
 	 die("Database connection failed: " . $connect->connect_error);
	}


	// REGISTER USER

if (isset($_POST['order_user'] )) {


		// receive all input values from the form
		$user =  $_POST['user'];
		//$user = ucfirst(strtolower($user));
		
		$category =$_POST['category'];
		//$category = ucfirst(strtolower($category));
		
		$product = $_POST['product'];	
		//$product = ucfirst(strtolower($product));
		
		$quantity =  $_POST['quantity'];
		//$quantity = ucfirst(strtolower($quantity));
		
		$price = $_POST['price'];
		//$price = ucfirst(strtolower($price));

		echo $user;

			$query =  "INSERT INTO orders (user,category, product, quantity, price) 
					  VALUES ('$user','$category','$product','$quantity','$price')";
			 
			$que = mysqli_query($connect, $query);
			if($que){
			echo 'success';
			}
			else
			{
				echo 'not success';
			}
			
			
			$_SESSION['category'] = $category;
			$_SESSION['success'] = "added";
			header('location: index.php');


	

}	

	
?>


