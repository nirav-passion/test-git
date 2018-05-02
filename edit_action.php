<?php 
    include ("class.php");
    $obj = new Action();
    
    if($_FILES['prodimg']['name'] !=""){
        
        $id = $_POST['id'];
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
        //echo $product_name;
        $upload = "product_img";
	    $actualPath = $upload."/".$product_image;
        move_uploaded_file($_FILES['prodimg']['tmp_name'],$actualPath);
        
        $obj->edit($id, $product_name, $product_desc, $product_image, $price, $disc_price, $color, $size, $status, $stock, $recommended, $featured);

        header("location:view.php");
        
    } else {
        $id = $_POST['id'];
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

        $obj->edit($id, $product_name, $product_desc, $product_image, $price, $disc_price, $color, $size, $status, $stock, $recommended, $featured);
        
        header("location:view.php");

    }
?>