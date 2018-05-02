<?php 
    include ("class.php");
    $obj = new Action();
    $id = $_GET['id'];

   // echo $id;

    $res = $obj->view_single_rec($id);
    $rows = mysqli_fetch_assoc($res);
   // print_r ($rows);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit record</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
			function form_edit(e) {
				// alert("Testing!!!!!");
				//e.preventDefault();
				//var vardata = $("#nirav").serialize();
                var form = $('#nirav')[0];
				var formData = new FormData(form);

				$.ajax({
					url:"edit_action.php",
					type:"POST",
					data:formData,
                    contentType: false,
					cache: false,
					processData: false,
                    success:show_msg
				});

			}

			function show_msg(result) {
				alert("hello");
				if(msg) {
					alert("Added sucessfully");
					// $("#nirav")[0].reset();
                    window.location.href = 'view.php';
				}
			}
	</script>

    <style>
			td {
                padding-top: 1em;
                padding-bottom: 1em;
            }

            .product{
                margin-left: 50px;
                padding-left: 20px;
                background-color: #e5e5e5;
            }
	</style>
</head>

<body>
    <div class="product">
        <h1>Edit product record</h1>
        <form id="nirav" name="editprod" method="post" action="" enctype="multipart/form-data">
            <input type="text" name="id" value="<?php echo $rows['id']; ?>" >
            <table>
                <tr>
                    <td><label for="prodname">Product Name</label></td>
                    <td><input type="text" class="" name="prodname" value="<?php echo $rows ['product_name']; ?>" size="30"></td>
                </tr>
                        
                <tr>
                    <td><label for="desc">Product Description</label></td>
                    <td><textarea rows="5" cols="30" name="proddesc" class="" ><?php echo $rows ['product_desc']; ?></textarea></td>
                </tr>
                        
                        <tr>
                            <td><label for="img">Product Image</label></td>
                            <td>
                            <input type="hidden" name="prodimg" value="<?php echo $rows['product_image']; ?>">
                            <input type="file" name="prodimg" accept="image/*" ></td>
                           <td><img src="product_img/<?php echo $rows['product_image']; ?>" height="50" width="50"></td>
                        </tr>
                        
                        <tr>
                            <td><label for="price">Price</label></td>
                            <td><input type="text" class="" name="price" value="<?php echo $rows ['price']; ?>" size="30"></td>
                        </tr>
                        
                        <tr>
                            <td><label for="discprice">Discount Price</label></td>
                            <td><input type="text" class="" name="discprice" value="<?php echo $rows ['disc_price']; ?>" size="30"></td>
                        </tr>
                        
                        <tr>
                            <td><label for="color">Color</label></td>
                            <td><input type="text" class="" name="color" value="<?php echo $rows ['color']; ?>" size="30"></td>
                        </tr>
                        
                        <tr>			
                            <td><label for="size">Size</label></td>
                            <td><input type="text" class="" name="size" value="<?php echo $rows ['size']; ?>" size="30"></td>
                        </tr>
                        
                        <tr>
                            <td><label for="status">Status</label></td>
                            <td><input type="radio" name="status" value="yes" 
                            <?php 
                                if($rows['status']=='yes'){ echo 'checked'; }                                   
                            ?> 
                            > Yes<br>
                                <input type="radio" name="status" value="no" 
                            <?php 
                                if($rows['status']=='no'){ echo 'checked'; }                                   
                            ?>
                            > No</td>
                        </tr>
                        
                        <tr>
                            <td><label for="stock">Stock</label></td>
                            <td><input type="radio" name="stock" value="yes" 
                            <?php 
                                if($rows['stock']=='yes'){ echo 'checked'; }                                   
                            ?> 
                            > Yes<br>
                                <input type="radio" name="stock" value="no" 
                            <?php 
                                if($rows['stock']=='no'){ echo 'checked'; }                                   
                            ?> 
                            > No</td>
                        </tr>
                        
                        <tr>
                            <td><label for="recom">Recommended</label></td>
                            <td>
                                <select name="recommended">
                                    <option value="Yes" 
                                    <?php 
                                        if($rows['recommended']=='yes'){ echo 'selected'; }                                   
                                    ?>
                                    >Yes</option>
                                    <option value="No" 
                                    <?php 
                                        if($rows['recommended']=='no'){ echo 'selected'; }                                   
                                    ?>
                                    >No</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><label for="featured">Featured</label></td>
                            <td>
                                <select name="featured">
                                    <option value="featured" 
                                    <?php 
                                        if($rows['featured']=='featuredyes'){ echo 'selected'; }                                   
                                    ?>
                                    >Featured</option>
                                    <option value="nonfeatured" 
                                    <?php 
                                        if($rows['featured']=='nonfeatured'){ echo 'selected'; }                                   
                                    ?>
                                    >Non featured</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><input type="button" name="view" value="View" onClick="window.location='view.php';"></td>
                            <td><input type="submit" name="submit" value="Edit Product" onClick="return form_edit(event)" ></td>
                        </tr>
                        
                    </table>
        </form>
    </div>
</body>

</html>