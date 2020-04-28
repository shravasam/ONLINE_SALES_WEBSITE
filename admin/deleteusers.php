<!DOCTYPE HTML>
<html>
<head>
<title>Admin portal delete users</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h3 style="text-align:center;"> Hi admin..! Here you can delete registered users from the list </h3>
<form name="form1" action="" method="post">
<?php
$link =mysqli_connect('127.0.0.1', 'root', '12581258', 'registration');
//$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"checkbox");
$res=mysqli_query($link,"select * from users");

echo "<table>";

while($row=mysqli_fetch_array($res))
{

echo "<tr>";
echo "<td>"; ?> <input type="checkbox" name="num[]" class="other" value="<?php echo $row["id"]; ?>" /> <?php echo "</td>";
echo "<th>"; echo 'ID';
echo "<td>"; echo $row["id"]; echo "</td>";
echo "<th>"; echo 'USER';
echo "<td>"; echo $row["username"]; echo "</td>";
echo "<th>"; echo 'EMAIL';
echo "<td>"; echo $row["email"]; echo "</td>";
echo "<th>"; echo 'PASSWORD[MP5]';
echo "<td>"; echo $row["password"]; echo "</td>";
echo "</tr>"; echo "</th>";
}
echo "</table>";
?>
<input type="submit" name="submit1" value="delete selected">
<a href ="product.php">go back admin page</a>
</form>


<?php
/* Admin will delete the users, will access 
@registration database of users and delete */
if(isset($_POST["submit1"]))
{
	$box=$_POST['num'];
	while (list ($key,$val) = @each ($box)) 
	{	
	   mysqli_query($link,"delete from users where id=$val"); 
	}
	
	
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php
}

?>


</body>
</html>
