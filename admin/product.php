<?php include('server_admin.php') 
/* This is homepage,  Admin will add categorys, products and price which will available to users to buy/add into basket */
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header"style="text-align:center;">
	<h1> ESIGELEC admin portal site </h1>

		<h2>Add the products into user database</h2>
	</div>

	<form method="post" action="product.php/" style="text-align:center;">



		<?php include('errors.php'); ?>


<div class="input-group">
			

<div class="option-group"><label>Add image</label>
<div class="input-group">
		<input type="checkbox" name="image"  value="<?php echo $image ="mobile.jpg";?>">mobile</option>
		<input type="checkbox" name="image"  value="<?php echo $image ="laptop.jpg";?>">laptop-</option>
	
	</div>
		
		<div class="input-group">
			<label>Add category</label>
			<input type="text" name="category" value="<?php echo $category; ?>">
		</div>
		<div class="input-group">
			<label>Add product</label>
			<input type="text" name="product" value="<?php echo $product; ?>">
		</div>
  
		<div class="input-group">
			<label>Add price</label>
			<input type="text" name="price" value="<?php echo $price; ?>">
		</div>
  
		<div class="input-group">
			<button type="submit" class="btn" name="add_product"> Add product</button>
		</div>
<br>
<hr><br>
</h4> Delete customer accounts </h4>
<a href ="deleteusers.php">click here</a><br><hr>
</h4> Delete products from the list already added in the customer database</h4>
<a href ="viewanddelete.php">click here</a>
</form>


</body>
</html>
