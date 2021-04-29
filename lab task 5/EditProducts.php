<?php 

require_once 'controller/DisplayController.php';
$Product = fetchProducts($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Products</title>
</head>
<body>

 <form action="controller/EditController.php" method="POST" enctype="multipart/form-data">
  <fieldset> 
    <legend>Edit Products</legend>
  <label for="Name">Name:</label><br>
  <input value="<?php echo $Product['Name'] ?>" type="text" id="Name" name="Name"><br>
  <label for="BuyingPrice">Buying price:</label><br>
  <input value="<?php echo $Product['BuyingPrice'] ?>" type="text" id="BuyingPrice" name="BuyingPrice"><br>
  <label for="SellingPrice">Selling Price:</label><br>
  <input value="<?php echo $Product['SellingPrice'] ?>" type="text" id="SellingPrice" name="SellingPrice"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
   <label for="Display">Display:</label><br>
   <input value="<?php echo $Product['Display'] ?>" type="text" id="Display" name="Display"><br>
   <input type="submit" name = "EditController" value="Update">
</form> 
</fieldset>

</body>
</html>

