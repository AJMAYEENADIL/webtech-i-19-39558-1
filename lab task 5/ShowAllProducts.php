<?php  
require_once 'controller/DisplayController.php';

$Products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Profit</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($Products as $i => $Product): ?>
			<tr>
				<td><a href="DeleteProducts.php?id=<?php echo $Product['Id'] ?>"><?php echo $Product['Name'] ?></a></td>
				<td><?php echo $Product['BuyingPrice'] ?></td>
				<td><?php echo $Product['SellingPrice'] ?></td>
				<td><a href="EditProducts.php?id=<?php echo $Product['Id'] ?>">Edit</a>&nbsp<a href="controller/DeleteController.php?id=<?php echo $Product['Id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>