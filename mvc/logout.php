
<?php
$logouturl = __DIR__.'/../mvc/home.php';
require $logouturl;
//session_start();
//user logout page

	// variable declaration
	//$username = "";
	//$email    = "";$password ="";
	
	//$errors = array(); 
	//$_SESSION['success'] = "";

	// connect to database
//$connect = mysqli_connect('127.0.0.1', 'root', '12581258', 'user-registration');
//include_once("logout.php");
if (isset($_SESSION["username"])) {
	session_destroy();
	header('location:home.php');
//echo <script> location.href="userLogin.php"</script>;

}


?>
