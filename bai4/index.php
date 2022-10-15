<?php
	require "./products.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chu</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<?php foreach( $products as $product ) { ?>
		<div class='sanpham'>
			<img src='public/images/<?=$product["image"]?>'>
			<h1><a href='./detail.php?id=<?=$product["id"]?>'><?=$product["name"]?></a></h1>
			<b>Giá: </b> <span class='gia'><?=$product["price"]?></span><br>
			<p><?=substr($product["desc"], 0, 100)?><a href='./detail.php?id=<?=$product["id"]?>'>[...]</a></p>
		</div>
	<?php } ?>
</body>
</html>
