<?php

if(!isset($_POST['pname']) || !isset($_POST['pauthor'])){
	echo "No data passed!";
	exit();
}

$name = $_POST['pname'];
$price = $_POST['pprice'];
$author = $_POST['pauthor'];
$desc = $_POST['pdesc'];



if($_FILES['pphoto']['error'] == 0){

	move_uploaded_file($_FILES['pphoto']['tmp_name'], "images/".$_FILES['pphoto']['name']);
	//move_uploaded_file(filename, where to save+filename)

	require("sql_connect.php");
	$photo = $_FILES['pphoto']['name'];
	$sql = mysqli_query($mysqli, "INSERT INTO products_t (productID, bookTitle, bookPrice, bookAuthor, bookDesc, bookImage)
								  VALUES (NULL, '".$name."', ".$price.", '".$author."', '".$desc."', '".$photo."')");


	if($sql){
		header("location:index.php");
	}else{
		echo "Error Inserting Data!";
		exit();
	}
}

?>