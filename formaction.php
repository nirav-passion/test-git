<?php 
	include ("class.php");
	
	$obj = new Action();
	
	if($_FILES['prodimg']['name'] != null){

		$product_name = $_POST['prodname'];
		$product_desc = $_POST['proddesc'];
		$product_image = $_FILES['prodimg']['name'];
		$price = $_POST['price'];
		$disc_price = $_POST['discprice'];
		$color = $_POST['color'];
		$size = $_POST['size'];
		$status = $_POST['status'];
		$stock = $_POST['stock'];
		$recommended = $_POST['recommended'];
		$featured = $_POST['featured'];
		
		$upload = "product_img";
		$actualPath = $upload."/".$product_image;
		$temp_img = $_FILES['prodimg']['tmp_name'];

		move_uploaded_file($temp_img,$actualPath);
		
		$obj->insert($product_name, $product_desc, $product_image, $price, $disc_price, $color, $size, $status, $stock, $recommended, $featured);

		header("location:view.php");
	}  else {

		$product_name = $_POST['prodname'];
		$product_desc = $_POST['proddesc'];
		$product_image = $_POST['prodimg'];
		$price = $_POST['price'];
		$disc_price = $_POST['discprice'];
		$color = $_POST['color'];
		$size = $_POST['size'];
		$status = $_POST['status'];
		$stock = $_POST['stock'];
		$recommended = $_POST['recommended'];
		$featured = $_POST['featured'];

		$obj->insert($product_name, $product_desc, $product_image, $price, $disc_price, $color, $size, $status, $stock, $recommended, $featured);
		
		header("location:view.php");

} 
?>