<?php
	require("sql_connect.php");
	if(isset($_GET['pid'])){
		$res = mysqli_query($mysqli, "DELETE FROM products_t WHERE productID =".$_GET['pid']);
	}else{
		header("location:index.php");
	}

	if($res){
		header("location:index.php");
	}else{
		echo "Oops! Error in deleting data!";
		echo mysqli_error($res);
	}
?>