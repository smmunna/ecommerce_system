<title>Supplier | Dashboard</title>
<link rel="icon" href="../webimage/shopicon.png" type="image/png">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php

session_start();
$email = $_SESSION['email'];
if (empty($email)) {
	header("Location: http://localhost/All_Code/ecommerce_system/supplier/supplier_login.php");
}

include('../connection.php');
include('../header.php');
?>
<!-- Important php code -->
<?php


?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<?php
			$sql = "SELECT * FROM `supplier_info` WHERE `email`='$email'";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
				$supplier_id = $row['supplier_id'];
			?>
				<p class="name">Hello, <span style="color: red;"><?php echo $row['supplier_name']; ?></span> </p> <br>
			<?php
			}
			?>

		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12">
			<h3 style="text-align: center;">:--Product List for Delivery--:</h3> <br>
			<table class="table table-bordered">
				<tr>
					<th scope="col">Product ID</th>
					<th scope="col">Product Name</th>
					<th scope="col">Customer Name</th>
					<th scope="col">Phone</th>
					<th scope="col">Address</th>
					<th scope="col">Delivery Date</th>
					<th scope="col">Complete Order</th>
				</tr>
				<?php

				// FOR getting the page number from the URL
				global $get_page;
				if (isset($_GET['page'])) {
					$get_page = $_GET['page'];
				}
				if ($get_page == "" || $get_page == "1") {
					$target_page = 1;
				} else {
					$target_page = $_GET['page'];
				}

				//determine the sql LIMIT starting number for the results on the displaying page  
				$page_first_result = ($target_page - 1) * 5;



				$sql1 = "SELECT product_name,product_id,order_id,payment_number,address,delivary,name,email FROM invoice_details WHERE supplier_id='$supplier_id' ORDER BY delivary DESC LIMIT $page_first_result,5";
				$result1 = mysqli_query($conn, $sql1);
				while ($row1 = mysqli_fetch_assoc($result1)) {
				?>


					<tr>
						<td><?php echo $row1['product_id'] ?></td>
						<td><?php echo $row1['product_name'] ?></td>
						<td><?php echo $row1['name'] ?></td>
						<td>+880<?php echo $row1['payment_number'] ?></td>
						<td><?php echo $row1['address'] ?></td>
						<td><?php echo $row1['delivary'] ?></td>
						<td>
							<a href="complete_supply.php?id=<?php echo $row1['order_id']; ?>">Complete Order</a>
						</td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
		<div style="display: flex;justify-content:center;">
			<nav aria-label="...">
				<ul class="pagination">
					<li class="page-item disabled">
						<span class="page-link">Previous</span>
					</li>

					<?php
					// For pagination -->
					$sql1 = "SELECT product_name,product_id,order_id,address,payment_number,delivary,name,email FROM invoice_details WHERE supplier_id='$supplier_id'";
					$result1 = mysqli_query($conn, $sql1);
					$count = mysqli_num_rows($result1);
					$i = ($count / 5);
					$page = ceil($i);

					for ($target = 1; $target <= $page; $target++) {
					?>

						<li class="page-item"><a class="page-link" href="http://localhost/All_Code/ecommerce_system/supplier/supplier_dashboard.php?page=<?php echo $target; ?>"><?php echo $target; ?></a></li>

					<?php
					}

					?>
					<li class="page-item disabled">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<!-- Content will be here -->
<?php include('../footer.php') ?>
<script src="../js/bootstrap.min.js"></script>

<!-- Styling this page-->
<style>
	.name {
		font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
		font-size: 30px;
		padding-top: 90px;
	}
</style>