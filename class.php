<?php
	class Action{
		
		public $db;
			
			public function __construct() {
				
				$this->db = new mysqli("localhost","root","","test3");
				
				if(mysqli_connect_errno()) {
					echo "Error: Could not connect to database";
					exit;
			}
		}
			public function insert($product_name, $product_desc, $product_image, $price, $disc_price, $color, $size, $status, $stock, $recommended, $featured) {
				
				$sql = "INSERT INTO `product_tbl` (`product_name`, `product_desc`, `product_image`, `price`, `disc_price`, `color`, `size`, `status`, `stock`, `recommended`, `featured`) VALUES ('".$product_name."','".$product_desc."','".$product_image."','".$price."','".$disc_price."','".$color."','".$size."','".$status."','".$stock."','".$recommended."','".$featured."')";
				
			/* 	echo $sql;
				exit(); */
				
				$res = mysqli_query($this->db, $sql);
				
				return $res;
				echo "success";
			}
			
			public function view() {
				//echo "Testing";
				
				$sql = "SELECT * FROM `product_tbl`";
				
				$res = mysqli_query($this->db, $sql);
				return $res;
			}

			public function delete($id) {
				$sql = "DELETE FROM `product_tbl` WHERE `id`='".$id."'";
				$res = mysqli_query($this->db, $sql);

				echo $id;
				//echo "success";

			}

			public function view_single_rec($id) {
				$sql = "SELECT * FROM `product_tbl` WHERE `id`='".$id."'";
				$res = mysqli_query($this->db, $sql);

				return $res;
			}
			


			public function edit($id, $product_name, $product_desc, $product_image, $price, $disc_price, $color, $size, $status, $stock, $recommended, $featured) {
				/* echo "testing";
				echo $id; */

				$sql = "UPDATE `product_tbl` SET `product_name`='".$product_name."', `product_desc`='".$product_desc."', `product_image`='".$product_image."', `price`='".$price."', `disc_price`='".$disc_price."', `color`='".$color."', `size`='".$size."', `status`='".$status."', `stock`='".$stock."', `recommended`='".$recommended."', `featured`='".$featured."' WHERE `id`='".$id."'";
				/* echo $sql;
				exit(); */
				$res = mysqli_query($this->db, $sql);

				return $res; 
				echo "success";
			}
		
	}
 ?>
