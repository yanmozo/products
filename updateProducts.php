<?php
	if( !isset($_POST['pname']) || !isset($_POST['pprice']) ){
		header("location:index.php");
		exit();
	}

	require("sql_connect.php");

	if(isset($_FILES['photo'])){

	}

	$name = $_POST['pname'];
	$price = $_POST['pprice'];
	$author = $_POST['pauthor'];
	$desc = $_POST['pdesc'];
	$id = $_POST['pid'];


	if($_FILES['pphoto']['tmp_name'] == ""){

		$sql = "UPDATE `products_t` 
			SET bookName='".$name."', 
			bookPrice=".$price.", 
			bookAuthor=".$author.", 
			bookDesc=".$desc.",  
			WHERE `productID` =".$id;

			move_uploaded_file($_FILES['pphoto']['tmp_name'], 'images/'.$_FILES['pphoto']['tmp_name']);

			require("sql_connect.php");
			$res = mysqli_query($mysqli, $sql);

			if($sql){
				header("location:index.php");
			}else{
				echo "Product Was Not Updated!";
			}
	}else{
		$sql = "UPDATE `products_t` 
			SET bookName='".$name."', 
			bookPrice=".$price.", 
			bookAuthor=".$author.", 
			bookDesc=".$desc.",  
			WHERE `productID` =".$id;

			move_uploaded_file($_FILES['pphoto']['tmp_name'], 'images/'.$_FILES['pphoto']['name']);

			require("sql_connect.php");
			$res = mysqli_query($mysqli, $sql);

			if($sql){
				header("location:index.php");
			}else{
				echo "Product Was Not Updated!";
			}
	}

	

	

?>