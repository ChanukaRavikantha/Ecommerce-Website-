<?php session_start();

$con = mysqli_connect("localhost","root","","sujithfurniture","3306");

if (!$con) {
    die("Sorry, you can't connect to the database.");
}

$id = $_GET['id'];
$sql = "SELECT * FROM`product` WHERE `AddID`=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


    if ($row) {
        $productName = $row["ProductName"];
        $category = $row["Categories"];
        $price = $row["Price"];
        $imagePath = $row["imagePath"];


        if (isset($_SESSION["email"])) {
            $email = $_SESSION["email"];

            $sql = "INSERT INTO `cartinfo`(`cartNum`, `ProductName`, `Price`, `imagePath`, `Email`) VALUES (NULL,'$productName','$price','$imagePath','$email')";
            
            if (mysqli_query($con, $sql)) {
                header("Location: viewAdverteesment.php");
                echo "<script>alert('Product added to cart');</script>";

            }
        }     
    }

?>    