<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	
	 $con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");

    if (!$con) {
        die("Sorry, you can't connect into the database.");
    }
	
	$sql= "DELETE FROM `product` WHERE `AddID` =" .$_GET["id"];
	
	if(mysqli_query($con, $sql)) {
		header('Location:Adminn.php');
       
	}
	
	
	
	?>
</body>
</html>