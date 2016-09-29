<?php
include("sql_connect.php");
?>
<html>
<head>
	<title>Add Product</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
<?php include("navbar.php"); ?>

<h2 class="text-center">Insert Product</h2>

<div class="row text-center">
	<div class="col col-sm-6 col-sm-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Insert New Book</h3>
			</div>
			<div class="panel-body">
				<form method="POST" action="insert.php" enctype="multipart/form-data">
					<input type="text" name="pname" class="form-control" placeholder="Book Title"><br>
					<input type="text" name="pprice" class="form-control" placeholder="Price"><br>
					<input type="text" name="pauthor" class="form-control" placeholder="Author"><br>
					<input type="text" name="pdesc" class="form-control" placeholder="Description"><br>
					<input type="file" name="pphoto" class="form-control" placeholder="Image">
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