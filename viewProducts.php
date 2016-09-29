<?php
include("sql_connect.php");
if(isset($_GET['pid'])){

	$res=mysqli_query($mysqli, "SELECT * FROM products_t WHERE productID = ".$_GET['pid']);

	$product = mysqli_fetch_array($res);

}else{
	header("location:index.php");
}
?>

<html>
<head>
	<title>View Product</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>

	<style>
		.products{
			width: 20%;
		}
	</style>

</head>
<body>
<?php include("navbar.php"); ?>

<h2 class="text-center">Book List</h2>
<div class="row">
	<div class="col col-sm-10 col-sm-offset-1">
		<h3 class="text-center"> <?php echo $product[1]; ?></h3>
		<p class="text-center"> <small> Price: P<?php echo $product[2]; ?> </small></p>
		<p class="text-center"> <small> Author: <?php echo $product[3]; ?> </small></p>
		<p class="text-center"> <small> Desc: <br><?php echo $product[4]; ?> </small></p>
		<p class="text-center">
			<img src="images/<?php echo $product[5]; ?>" class="img-thumbnail products">
		</p>
	</div>
</div>
<?php
?>



</body>
</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>