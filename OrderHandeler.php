<?php session_start();

$con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");

if (!$con) {
    die("Sorry, you can't connect into the database.");
}


    $email = $_SESSION["email"];

    $sql = "SELECT * FROM `cartinfo` WHERE `Email` = '$email'";
    $cart_results = mysqli_query($con, $sql);

    if (mysqli_num_rows($cart_results) > 0) {

        
        $sql = "SELECT SUM(Price) AS total_price FROM `cartinfo` WHERE `Email` = '$email'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $total_price = $row['total_price'];


        $sql = "SELECT * FROM `users` WHERE Email = '$email'";
        $user_result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($user_result);
        $address = $user['Address'];

        $productNames = '';

        while ($cart_item = mysqli_fetch_assoc($cart_results)) {

            $product_id = $cart_item['cartNum'];
            $price = $cart_item['Price'];
            $orderDate = date('Y-m-d');

            $productName = $cart_item['ProductName'];

            if ($productNames != '') {
                $productNames .= "<br>";
            }
            $productNames .= $productName;

        }
        $order_sql = "INSERT INTO `orderview`(`cartNum`, `Email`, `totalCost`, `dateOfOrder`, `Address`, `Product`) VALUES (NULL,'$email','$total_price','$orderDate','$address','$productName')";
        mysqli_query($con, $order_sql);
        header("Location: viewAdverteesment.php");
        
    }

?>
