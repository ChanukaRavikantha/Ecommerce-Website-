<?php

if (isset($_POST["btnRegister"])) {
    $name = $_POST["txtName"];
    $email = $_POST["txtEmail"];
    $passowrd = $_POST["txtPassword"];
    $contact = $_POST["txtContactNo"];
    $address = $_POST["txtAddress"];

    $con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");

    if (!$con) {
        die("Sorry, you can't connect into the database.");
    }

    $sql = "INSERT INTO `users` (`Name`, `Email`, `Password`, `Phone Number`,`Address` ) VALUES ('$name', '$email', '$passowrd', '$contact', '$address')";

    mysqli_query($con, $sql);

    header('Location:indax.html?class=frm');
}

?>