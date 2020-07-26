
<?php
//user order page after choosing the products from the his basket. it will store the values in the database @orders in basket.db
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

	$connect = mysqli_connect('localhost', 'root', '12581258', 'basket');
	if ($connect->connect_error) {
 	 die("Database connection failed: " . $connect->connect_error);
	}


	// REGISTER USER

if (isset($_POST['order_user'] )) {


		// receive all input values from the form
		$user =  $_POST['user'];
		//$user = ucfirst(strtolower($user));
		
		//echo $_POST['category'];
		//$category = implode(" ",$_POST);
		
		$category =$_POST['category'];
		//$category = ucfirst(strtolower($category));
		
		$product = $_POST['product'];	
		//$product = ucfirst(strtolower($product));
		
		$quantity =  $_POST['quantity'];
		//$quantity = ucfirst(strtolower($quantity));
		
		$price = $_POST['price'];
		//$price = ucfirst(strtolower($price));

		$fields = ["$user", "$category", "$product","$quantity","$price"];
$params = [];
foreach($fields as $field) {
   // if(!isset($_POST[$field])) {
     //   exit("Field required: $field");
    //}
    $params[":$field"] = $_POST[$field];
}

$pdo = new PDO("mysql:host=localhost;dbname=basket", 'root', '12581258');
$sth = $pdo->prepare('
    INSERT INTO orders VALUES(:user, :category, :product, :quantity, :price);
');
$sth->execute($params);

		echo $user;

			//$query =  "INSERT INTO orders (user, category) 
			//		  VALUES ('$user, $category')";
			 
			//mysqli_query($connect, $query);
			//if($query){
			//echo 'success';
			//}
			//else
			//{
				//echo 'not success';
		//	}
			
			
		//	$_SESSION['category'] = $category;
		//	$config_path = __DIR__.'/../mvc/index.php';
		//	require $config_path;
		//	$_SESSION['success'] = "added";
			//header('location: $config_path');


	

}	

	
?>


