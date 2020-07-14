
<?php 
	//session_start();

	// variable declaration
	$image = "";
	$category = "";
	$product = "";
	$price = "";
	//$messae= "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database

	$connect = mysqli_connect('127.0.0.1', 'root', '12581258', 'basket');
/*  Admin manager server page to insert the 
*values into database @products in @basket */

	// REGISTER USER
if (isset($_POST['add_product'] )) {


		// receive all input values from the form
		$image = mysqli_real_escape_string($connect, $_POST['image']);
		$category = mysqli_real_escape_string($connect, $_POST['category']);	
		$product = mysqli_real_escape_string($connect, $_POST['product']);
		$price = mysqli_real_escape_string($connect, $_POST['price']);

			$query = "INSERT INTO products (image,category,product, price) 
			VALUES('$image','$category', '$product','$price')";	 
			mysqli_query($connect, $query);
			
			$_SESSION['category'] = $category;
			$_SESSION['success'] = "added";
			header('location: product.php');


	

}	

	
?>

