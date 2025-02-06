<?php
session_start();
if(!isset($_SESSION["email"])){
	header("Location:login.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>shop</title>
 <!--------------- link css file ------------------->
 <link rel="stylesheet" href="css/view.css" type="text/css">
 <link rel="stylesheet" href="css/shop.css">
 <link rel="stylesheet" href="css/style.css">

<!---------------- box icon ------------------------>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!---------------- logo icon ------------------------>
<link rel="shortcut icon" href="image/icon.png" type="image/SF-icon">

</head>
<body>




<body>
    <header>
        <div class="nav container">

            <!--------- Manu icon ----------->
            <div class="menu-icon">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

            <!--------- nav list ------------>
            <ul class="navbar">
                <li><a href="indax.html">Home</a></li>
                <li><a href="TheCompany.html" >About</a></li>
              </ul>


            <!---------- logo ( Sujith furniture )-------------->
            <a href="" class="logo" >
                SUJITH FURNITURE<span></span>
            </a>

            <!------------ nav icon (cart and user) -------------------->
            <div class="nav-icons">
       

                <i class='bx bx-user' id="user-icon"></i> 
                
                <a herf="cart.php" ><i class='' id="cart-icon" ></i></a>
                <div class="nav-icons">
                <a href="cart.php" class="logo" >CART</a>
            </div>

        </div>



<!-------------------------- user profile ------------------------------------->
           <div class="login-form">
        <?php
        $con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");
          
        if(!$con){
          die("Sorry, you can't connect to the database.");
        }
    
        $sql = "SELECT * FROM`users` WHERE Email='" . $_SESSION["email"] ."'";
	
	    $results = mysqli_query($con,$sql);
         if(mysqli_num_rows($results)>0){
       
		$row = mysqli_fetch_assoc($results);{

        ?>

        <div class="profile-container">
            <div class="profile-picture">
            <img src="image/profile.png" alt="Profile Picture">
            </div>
                <div class="profile-info">
                    <p><strong>User Name:</strong><?php echo $row['Name']; ?></p>
                    <p><strong>Email:</strong> <?php echo $row['Email']; ?></p>
                    <p><strong>Phone:</strong> <?php echo $row['Phone Number']; ?></p>
                </div>
        </div>

       
        <?php
                }
            }

        ?> 


<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .profile-container {
    width: 80%;
    max-width: 600px;
    margin: 40px auto;
    background: #ffffff; 
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
    text-align: center;
    font-family: 'Arial, sans-serif';
    color: #333333; /* Explicit 6-digit hex color code for consistency */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.profile-container:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15), 0 2px 6px rgba(0, 0, 0, 0.1); /* Slightly stronger shadow on hover */
}

.profile-picture {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 20px;
}


        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
        } 
        .profile-picture img {
            width: 100%;
            height: auto;
        }
        .profile-info {
            text-align: center;
        }
        .profile-info p {
            margin: 5px 0;
            font-size: 1em; 
            line-height: 1.6; 
            color: #7f8c8d;
        }
    </style>

    </header>
	<br><br><br><br><br>




<?php
	 $con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");

    if (!$con) {
        die("Sorry, you can't connect into the database.");
    }
	
	$sql = "SELECT * FROM`product`";
	
	$results = mysqli_query($con,$sql);
	if(mysqli_num_rows($results)>0){
		//while($row = mysqli_fetch_assoc($results)){ 
?>
	 <section class="school container" id="school"> 

       

	<div class="school-content">
    <?php
        while($row = mysqli_fetch_assoc($results)){ 
      ?>   
	    <div class="box">
		    <img src="<?php echo $row["imagePath"] ?>">
			<div class="box-text">
			   <h3><?php echo $row["ProductName"]; ?></h3>
               
				<span><a href='cartHandle.php?id=<?php echo $row["AddID"]; ?>'>
                
                   <i class='bx bx-cart-alt'></i></a></span>
		
			</div> RS <?php echo $row["Price"]; ?>.00
		    </div>

            <?php
	        }
          ?>

	    </div>
    
        <?php
		}
        ?>
     <div>
   

</section>    	



<!----------------------------- footer start --------------------------->
    <!---------------------------------------------------------------------->
    <br><br>
      <section class="footer container">
         <div class="footer-box">
          <h3>The Company</h3>
          <a href="TheCompany.html">About Us</a>
          <a href="TheCompany.html">Help</a>
          <a href="TheCompany.html">Privancy Policy</a>
         </div>

         <div class="footer-box">
          <h3>Categories</h3>
          <a href="#">School</a>
          <a href="#">office</a>
         </div>

         <div class="footer-box">
          <h3>More Informatin</h3>
          <a href="TheCompany.html">Delivery & Returns</a>
          <a href="TheCompany.html">Contact Us</a>
          
         </div>

         <div class="footer-box">
          <h3>Social</h3>
          <div class="social">
          <a href="#"><i class='bx bxl-facebook-square' ></i></a>
          <a href="#"><i class='bx bxs-phone-call' ></i></a>
          <a href="#"><i class='bx bxl-whatsapp' ></i></a>
          <a href="#"><i class='bx bxl-gmail' ></i></a>
        
         
        </div>
      </section>
      
    <!-------------------------- footer end -------------------------->
 
<div class="copyright">
        <p>&#169; All Right Reserved @ Chanuka Ravikantha</p>
      </div>
      <!-- link to javascript file -->
      <script src="js/main.js"></script>
</body>
</html>