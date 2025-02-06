<?php
    session_start();
        if(!isset($_SESSION["email"])){
            header("Location:indax.html");
        }
?> 



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Product</title>

<!-- link css file -->
<link rel="stylesheet" href="css/addAdver.css" type="text/css"> 

<link rel="stylesheet" href="css/admin.css">

<!-- fav icon -->
<link rel="shortcut icon" href="image/icon.png" type="image/SF-icon">
</head>

<body>

<div class="container">
        <aside>
             
           <div class="top">
             <div class="logo">
               <h2><span class="danger">Sujith Furniture</span> </h2>
             </div>
             
           </div>
           <!-- end top -->
            <div class="sidebar">
             
             <a href="Adminn.php">
               <h3>Dashbord</h3>
             </a>   

            </div>  
       
        </aside> 
<script>
            const navSlide = () => {
        const burger = document.querySelector(".burger");
        const nav = document.querySelector(".nav-links");
        const navLinks = document.querySelectorAll(".nav-links a");

        burger.addEventListener("click", () => {
            nav.classList.toggle("nav-active");

            navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = "";
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${
                index / 7 + 0.5
                }s `;
            }
            });
            burger.classList.toggle("toggle");
        });
        //
        };

        navSlide();
    </script>
          
    <div class="form-style-5">

    <aside>
             
             <div class="top">
               <div class="logo">
                 <h2><span class="danger">Add Product</span> </h2>
               </div>
             </div>
           
               
         
  </aside> 
  <br>
<form action="addAdverteesment.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><span class="number">1</span> Product Info</legend>
            <p>
            <input type="text" name="txtID" placeholder="Product id" required>  
            <input type="text" name="txtProduct" placeholder="Product Name ( Should be Unic )" required>
            <input type="text" name="txtCategorie" placeholder="Product Categorie" required>
            <input type="file" name="imageFile" placeholder="Upload a Picture" required>
            </p>   
         </fieldset>

        <fieldset>
            <legend><span class="number">2</span> Price Details</legend>
            <input type="text" name="txtPrice" placeholder="Product price" >
            <label for="txtPublish">Publish the Advertisement : 
            <input type="checkbox" name="txtPublish" >
            </label>
        </fieldset>
                
            <input type="submit" value="Add Post" name="btnSubmit"/>
</form>

<?php
          if(isset($_POST["btnSubmit"])){
            $ProductID = $_POST["txtID"];
            $ProductName = $_POST["txtProduct"];
            $Categories = $_POST["txtCategorie"];
            $Price = $_POST["txtPrice"];
          
            if(isset($_POST["txtPublish"])){
              $status = 1;
            }
            else{
              $status = 0;
            }
            
            $image = "uploads/" . basename($_FILES["imageFile"]["name"]);
            move_uploaded_file($_FILES["imageFile"]["tmp_name"], $image);
            
            $con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");
          
            if(!$con){
              die("Sorry, you can't connect to the database.");
            }
            $sql = "INSERT INTO `product`(`AddID`,`ProductName`, `Categories`, `Price`, `imagePath`) VALUES ('$ProductID','$ProductName','$Categories','$Price','$image')";

            
            if(mysqli_query($con, $sql)){
              echo "Advertisment uploaded successfully";
            }
            else{
              echo "Something went wrong";
            }
       }

?>

</div>
</body>
</html>