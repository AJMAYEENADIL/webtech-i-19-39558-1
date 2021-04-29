
<!--<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
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
		<?php foreach ($allSearchedProducts as $i => $Product): ?>
			<tr>
				<td><a href="../showProducts.php?id=<?php echo $Product['Id'] ?>"><?php echo $user['Id'] ?></a></td>
				<td><?php echo $Product['Name'] ?></td>
                <td><a href="EditProducts.php?id=<?php echo $Product['Id'] ?>">Edit</a>&nbsp<a href="controller/SearchControll.php?id=<?php echo $user['Id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>!-->




<!DOCTYPE html>
<html>
<head>
	<title>Search Product</title>
</head>
<body>

	<fieldset>
		<legend><b>SEARCH PRODUCT</b></legend><br>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <input type="text" name="name" value="<?php if (!empty($_POST['name'])) {echo $_POST['name'];} ?>" required/>
      <input type="submit" name="search" value="Search By Name"/>
    </form><br>
<?php require_once 'controller/SearchController.php'; ?>
	</fieldset>

</body>
</html>