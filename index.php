<?php
include("sql_connect.php");
?>
<html>
<head>
	<title>Book List</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>

</head>
<body>
<?php include("navbar.php"); ?>

<h2 class="text-center">Book List</h2>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<br>
		<table class="table table-bordered">
			<th>ID</th>
			<th>Book Title</th>
			<th>Price</th>
			<th class="text-center">Author</th>
			<th class="text-center">Options</th>

			<?php
				$result= mysqli_query($mysqli, "SELECT * FROM products_t");

				$names= array();
				$price= array();
				$author= array();
				$desc= array();

				if($result){
					$index=0;
					while($row = mysqli_fetch_array($result)){
						$names[] = $row[1];
						$price[] = $row[2];
						$author[]= $row[3];
						$desc[]= $row[4];
						$img[]= $row[5];

						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td class='text-center'>".$row[1]."</td>";
						echo "<td class='text-center'>P".$row[2]."</td>";
						echo "<td class='text-center'> ".$row[3]."</td>";
						echo "<td align='center'>";
						echo "	<button class='btn btn-sm btn-primary' alt='".$index++."'> 
								<span class='glyphicon glyphicon-eye-open'></span>
								</button>";

						echo " <a href='edit.php?pid=".$row[0]."'><button class='btn btn-sm btn-warning'> 
								<span class='glyphicon glyphicon-pencil'></span>
								</button></a>";

						echo " <a href='deleteProduct.php?pid=".$row[0]."' <button class='btn btn-sm btn-danger'> 
								<span class='glyphicon glyphicon-remove' class='check'></span>
								</button></a>";

						echo "</td>";
						echo "</tr>";
					}
				}
			?>

		</table>
	</div>
</div>

<div class="modal fade myModal" tab-index="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content text-center">
			<br>
			<p><strong>Name:</strong><span class="mod_name"></span></p>
			<p><strong>Price:</strong><span class="mod_price"></span></p>
			<p><strong>Author:</strong><span class="mod_author"></span></p>
			<p><strong>Description:</strong><span class="mod_desc"></span></p>
			<img class="mod_img">
			<br><br>
		</div>
		<br>
	</div>
</div>

</body>
</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>

<script type="text/javascript">

var names = [<?php echo "'".join("','",$names)."'"?>];
var price = [<?php echo join(",",$price) ?>];
var desc = [<?php echo "'".join("','", $desc)."'" ?>];
var author = [<?php echo "'".join("','", $author)."'"?>];
var img = [<?php echo "'".join("','", $img)."'"?>];

$(document).ready(function() {
		$(".check").on("click", function(){
		return confirm("Are you sure?");
	});

	$(".btn-primary").on("click", function(){
		var i = $(this).attr("alt");
		var prodName = names[i];
		var prodPrice = price[i];
		var prodDesc = desc[i];
		var prodAuthor = author[i];
		var prodImg = img[i];

		$(".mod_name").text(prodName);
		$(".mod_author").text(prodAuthor);
		$(".mod_price").text(prodPrice);
		$(".mod_desc").text(prodDesc);
		$(".mod_img").attr("src", "images/"+prodImg);

		$(".modal").modal("show");
	});

});

</script>