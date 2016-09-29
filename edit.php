<?php

if(!isset($_GET['pid'])){
	header("location:index.php");
	exit();
}

require("sql_connect.php");
$res = mysqli_query ($mysqli, "SELECT * FROM products_t WHERE productID =".$_GET['pid']);

$data = mysqli_fetch_row($res);


?>
<html>
<head>
	<title>Edit Product</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
<?php include("navbar.php"); ?>

<h2 class="text-center">Edit Product</h2>

<div class="row text-center">
	<div class="col col-sm-4 col-sm-offset-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Change <?php echo $data[1]; ?></h3>
			</div>
			<div class="panel-body">
				<form method="POST" action="updateProducts.php" enctype="multipart/form-data">
					<input type="text" value="<?php echo $data[0]?>" name="pid" hidden>
					<input type="text" value="<?php echo $data[1]?>" name="pname" class="form-control" placeholder="Book Title">
					<input type="text" value="<?php echo $data[2]?>" name="pprice" class="form-control" placeholder="Price">
					<input type="text" value="<?php echo $data[3]?>" name="pauthor" class="form-control" placeholder="Author">
					<input type="text" value="<?php echo $data[4]?>" name="pdesc" class="form-control" placeholder="Description">
					<p class="text-center">
						<img src="images/<?php echo $data[5]?>">
					</p>
					<input type="file"name="pphoto" class="form-control">
					<br><br>
					<button class="btn btn-success pull-right">SUBMIT</button>
			</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>