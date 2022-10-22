<?php 
	session_start();
	require "./carts.php";
	require "../products.php";

	$carts = new Carts;
	$cart_data = $carts->getCartAll();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cart</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<h1>Your cart</h1>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>#id</th>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php foreach( $cart_data as $id => $num ):  ?>
			<?php $product = getProduct( $id ); ?>
			<tr>
				<td>p<?=$product["id"]?></td>
				<td><?=$product["name"]?></td>	
				<td><?=$num?></td>
				<td><?=$product["price"]*$num?></td>
				<td><a href="delete.php?id=<?=$product["id"]?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<br>
	<a href="../index.php">Back to home</a>
</body>
</html>