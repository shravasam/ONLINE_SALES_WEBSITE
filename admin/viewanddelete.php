<!DOCTYPE HTML >
<html>
<head>
<title>Admin manager access rights</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h2 style="text-align:center;"> Hi admin..! Please verify products or remove products from the customer database</h2>
<form name="form1" action="" method="post" >

<?php 
	
/* Admin manager will view and delete the products from the database @basket and table products */
$link =mysqli_connect('127.0.0.1', 'root', '12581258', 'basket');
//$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"checkbox");
$res=mysqli_query($link,"select * from products");
echo "<table>";
while($row=mysqli_fetch_array($res))
{

echo "<tr>";
echo "<td>"; ?> <input type="checkbox" name="num[]" class="other" value="<?php echo $row["id"]; ?>" /> <?php echo "</td>";
echo "<th>"; echo 'ID';
echo "<td>"; echo $row["id"]; echo "</td>";
//echo "<td>"; echo $row["image"]; echo "</td>";
echo "<th>"; echo 'CATEGORY';
echo "<td>"; echo $row["category"]; echo "</td>";
echo "<th>"; echo 'PRODUCT';
echo "<td>"; echo $row["product"]; echo "</td>";
echo "<th>"; echo 'PRICE';
echo "<td>"; echo $row["price"]; echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
<input type="submit" name="submit1" value="delete selected" style="text-align:center;">
<a href ="product.php" style="text-align:center;">go back admin page</a>
</form>



<?php
if(isset($_POST["submit1"]))
{
	$box=$_POST['num'];
	while (list ($key,$val) = @each ($box)) 
	{	
	   mysqli_query($link,"delete from products where id=$val"); 
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
