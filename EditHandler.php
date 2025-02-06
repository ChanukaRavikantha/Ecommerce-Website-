<?php 
session_start();

if(isset($_POST["btnsubmit"])){
		$productName=$_POST["txtTitle"];
		$category = $_POST["txtCategorie"];
		$price = $_POST["txtPrice"];
		
		if(isset($_POST["txtPublish"])){
			$status = 1;
		}else {
			$status = 0;
		}
	if(!file_exists($_FILES["imageFile"]["tmp_name"]) || !is_uploaded_file($_FILES["imageFile"]["tmp_name"])){
		$image = $_SESSION["imagePath"];
	}else{
		$image = "uploads/" . basename($_FILES["imageFile"]["name"]);
		move_uploaded_file($_FILES["imageFile"]["tmp_name"], $image);
	}
    $con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");
    if (!$con) {
        die("Sorry, you can't connect into the database.");
    }
	$sql = "UPDATE `product` SET `ProductName` = '$productName', `Categories` = '$category', `Price` = '$price', `imagePath` = '$image' WHERE `product`.`AddId` =". $_GET["id"];
	
	if(mysqli_query($con, $sql)){
		header('Location:Adminn.php');
	}
}

?>