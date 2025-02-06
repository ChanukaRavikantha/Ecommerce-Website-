<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");
        
if(!$con){
  die("Sorry, you can't connect to the database.");
}

$sql = "DELETE FROM cartinfo WHERE cartNum =" . $_GET["id"];

if(mysqli_query($con, $sql)){
    header("Location:cart.php");
    alert("Delete Successfully.");
}

?>
    
</body>
</html>