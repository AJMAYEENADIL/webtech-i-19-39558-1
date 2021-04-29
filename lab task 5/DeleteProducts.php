<!--<?php  
require_once 'controller/DisplayController.php';

$Product = fetchProducts($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Products</title>
</head>
<body>

	
		<form action="controller/DeleteController.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
		<fieldset>
	    <legend><b>Delete Products</b></legend><br>
		Name:<?php echo $Product['BuyingPrice']; ?>
		Buying Price:<?php echo $Product['SellingPrice']; ?>
       Selling Price: <?php echo $Product['Display']; ?>
	   Display: <input type="submit" name="id" value="Delete">

	</form>

</body>
</html>

!-->




<?php 

require_once 'model/model.php';
if(isset($_GET['id']))
{
  $product = showProduct($_GET['id']);  
}
else
{
  header('Location: displayProduct.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Delete Product</title>
</head>
<body>
<form method="POST">
 <fieldset style="width: 15%;">
  <legend>DELETE PRODUCT</legend>

  Name : <?php echo $product['Name'] ?><br>

  Buying Price : <?php echo $product['Buying Price'] ?><br>

  Selling Price : <?php echo $product['Selling Price'] ?><br>

  Displayable :<?php echo $product['Display'] ?><br>

  <hr>
  <a href="Controller/removeProduct.php?id=<?php echo $product['ID'] ?>">Delete</a>

 </fieldset>
</form>
</body>
</html>