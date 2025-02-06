<?php
session_start();
   if(isset($_POST["btnSubmit"])){
	   $email = $_POST["txtEmail"];
	   $password = $_POST["txtPassword"];
	   $admin = "adminsf@gmail.com";
	   
	   $con = mysqli_connect("localhost","root","","sujithfurniture","3306");
	   
	   if(!$con){
		   die("Sorry , you can't connect to the database.");
	   }
	   
	   $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
	   
	   $result = mysqli_query($con,$sql);
	   
	   if(mysqli_num_rows($result)>0){

		 if($email===$admin){
		   $_SESSION["email"] = $email;
		   
		   header("Location:Adminn.php");
		 }else{
			$_SESSION["email"] = $email;
		   
			header("Location:viewAdverteesment.php");
		 }
           
	   }else{
		   header("Location:indax.html");
           echo"<script>alert('Didn't log successfully!!');</script>"; 
		    
	   }
   }

?>
