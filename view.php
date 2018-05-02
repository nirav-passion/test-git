<?php 
	include ("class.php");
	
	$obj = new Action();
	$res = $obj->view();
?>

<html>
	<head>
		<title>View records</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		function del_records(id) {
			var pid = id;
			var vardata = {id : pid};
			var message = confirm("Do you want to delete the records??");
				if(message == true) {
					$.ajax({
						url:"delete.php",
						type:"POST",
						data:vardata,
						success:show_msg	
					});
				}

		}

		function show_msg(msg) {
			//alert(($("#id"))+msg);
			$x = msg;
			alert($x);
			if(msg) {
				//alert("Hi form show msg!!!");
				$("#id"+$x).fadeOut();
			}
		}
	
	</script>

	</head>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
	<body>
		<div style="overflow-x:auto;">
		<table border="1">
			<tr>
				<th>Number</th>
				<th>Name</th>
				<th>Description</th>
				<th>Image</th>
				<th>Price</th>
				<th>Discount price</th>
				<th>Color</th>
				<th>Size</th>
				<th>Status</th>
				<th>Stock</th>
				<th>Recommeneded</th>
				<th>Featured</th>
				<th>Action_Type</th>
			</tr>
<?php $x = 1; while($rows = mysqli_fetch_assoc($res)) { ?>

<?php //print_r($rows); ?>
			<tr id="id<?php echo $rows['id'];?>">			
				<td><?php echo $x; $x = $x + 1; ?></td>
				<td><?php echo $rows['product_name']; ?></td>
				<td><?php echo $rows['product_desc']; ?></td>
				<td><img src="product_img/<?php echo $rows['product_image'];?>" height="50" width="50"></td>
				<td><?php echo "$ ".$rows['price']; ?></td>
				<td><?php echo "$ ".$rows ['disc_price']; ?> </td>
				<td><?php echo $rows['color']; ?></td>
				<td><?php echo $rows['size']; ?></td>
				<td><?php echo $rows['status']; ?></td>
				<td><?php echo $rows['stock']; ?></td>
				<td><?php echo $rows['recommended']; ?></td>
				<td><?php echo $rows['featured']; ?></td>
				<td>
					<a href="#" onclick="del_records(<?php echo $rows['id']; ?>)">Delete</a>
					<a href="edit.php?id=<?php echo $rows['id']; ?>">Edit</a>
				</td>

				
			</tr>
<?php } ?>
		</table>
		<input type="button" name="view" value="Back" onClick="window.location='form.php';">
	</div>
	</body>
</html>