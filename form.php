<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			function form_validate(e) {
				//alert("Testing!!!!!");
				// var vardata = $("#nirav").serialize(); Serialize is not used becoz the image or file function is used so
				var form = $('#nirav')[0];
				var formData = new FormData(form);

				e.preventDefault();

				$.ajax({
					url:"formaction.php",
					type:"POST",
					data:formData,
					contentType: false,
					cache: false,
					processData: false,
					success:show_msg
				});

			}

			function show_msg(msg) {
				//alert(msg);
				if(msg) {
					alert("Added sucessfully");
					$("#nirav")[0].reset();

				}

			}
		
		</script>
	<title>User Form</title>
		<style>
			td {
				padding-top: 1em;
				padding-bottom: 1em;
			}

			#container{
				margin-left: 50px;
				padding-left: 20px;
				background-color: #e5e5e5;
			}
		</style>
	</head>
	<body>
		<div id="container">
			<form name="product" method="post" action="" enctype="multipart/form-data" id="nirav">
				<table>
					<tr>
						<td><label for="prodname">Product Name</label></td>
						<td><input type="text" class="" name="prodname" size="30"></td>
					</tr>
					
					<tr>
						<td><label for="desc">Product Description</label></td>
						<td><textarea rows="5" cols="30" name="proddesc" class="" ></textarea></td>
					</tr>
					
					<tr>
						<td><label for="img">Product Image</label></td>
						<td><input type="file" name="prodimg" accept="image/*" ></td>
					</tr>
					
					<tr>
						<td><label for="price">Price</label></td>
						<td><input type="text" class="" name="price" size="30"></td>
					</tr>
					
					<tr>
						<td><label for="discprice">Discount Price</label></td>
						<td><input type="text" class="" name="discprice" size="30"></td>
					</tr>
					
					<tr>
						<td><label for="color">Color</label></td>
						<td><input type="text" class="" name="color" size="30"></td>
					</tr>
					
					<tr>			
						<td><label for="size">Size</label></td>
						<td><input type="text" class="" name="size" size="30"></td>
					</tr>
					
					<tr>
						<td><label for="status">Status</label></td>
						<td><input type="radio" name="status" value="yes" checked> Yes<br>
							<input type="radio" name="status" value="no"> No</td>
					</tr>
					
					<tr>
						<td><label for="stock">Stock</label></td>
						<td><input type="radio" name="stock" value="yes" checked> Yes<br>
							<input type="radio" name="stock" value="no"> No</td>
					</tr>
					
					<tr>
						<td><label for="recom">Recommended</label></td>
						<td>
							<select name="recommended">
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td><label for="featured">Featured</label></td>
						<td>
							<select name="featured">
								<option value="featured">Featured</option>
								<option value="nonfeatured">Non featured</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td><input type="button" name="view" value="View" onClick="window.location='view.php';"></td>
						<td><input type="submit" name="submit" value="Add Product" onClick="return form_validate(event)" ></td>
					</tr>
					
				</table>	
			</form>			
		</div>
	</body>
</html>