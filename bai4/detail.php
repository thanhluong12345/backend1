<?php
	require "./products.php";
	$product = array();
	if( isset( $_GET["id"] ) ) {
		$id = $_GET["id"];
		foreach( $products as $val ) {
			if( $val["id"] == $id ) {
				$product = $val;
				break;
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<?php if( !empty($product) ) { ?>
		<div class='sanpham'>
		<img src='public/images/<?=$product["image"]?>'>
		<h1><?=$product["name"]?></h1>
		<b>Giá: </b> <span class='gia'><?=$product["price"]?></span><br>
		<p><?=$product["desc"]?></p>
		<a class="addcart" href="./addcart.html">Add To Cart</a>
	</div>
	<?php } ?>
</body>
</html>
