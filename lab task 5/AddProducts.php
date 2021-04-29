<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
</head>
<body>

 <form action="controller/CreateController.php" method="POST" enctype="multipart/form-data">
 	<fieldset>
	<legend><b>Add Products</b></legend><br>
  <label for="Name">Name:</label><br>
  <input type="text" id="Name" name="Name"><br>
  <label for="BuyingPrice">Buying Price:</label><br>
  <input type="text" id="BuyingPrice" name="BuyingPrice"><br>
  <label for="SellingPrice">Selling Price:</label><br>
  <input type="text" id="SellingPrice" name="SellingPrice"><br>
  <input type="checkbox" name="display" value="Yes">
  <label for="display">Display</label><hr>
  <input type="submit" name = "saveProduct" value="Save">
</form> 
</fieldset>

</body>
</html>

