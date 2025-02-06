<?php
session_start();
// if(!isset($_SESSION["Email"])){
// 	header("Location:login.php");
// }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Product</title>
    <link rel="stylesheet" href="CSS/formStyle.css" type="text/css">
    <link rel="stylesheet" href="css/addAdver.css" type="text/css"> 
    <link rel="stylesheet" href="css/admin.css">


    <!---------------- logo icon ------------------------>
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




<?php
	
	$id = $_GET["id"];
	
	 $con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");

    if (!$con) {
        die("Sorry, you can't connect into the database.");
    }
	
	$sql = "SELECT * FROM `product` WHERE `AddID`=". $id;
	
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	
?>



          
    <div class="form-style-5">


    <aside>
             
             <div class="top">
               <div class="logo">
                 <h2><span class="danger">Edit Product</span> </h2>
               </div>
             </div>
           
               
         
  </aside> 
    <br>

    
                      <form method="post" action="EditHandler.php?id=<?php echo $id; ?>"  enctype="multipart/form-data">
                <fieldset>
                      <legend><span class="number">1</span> Product Info</legend>
                      <input type="text" name="txtTitle" placeholder="Product Name " value="<?php echo $row["ProductName"]; ?>" required>
                      <input type="text" name="txtCategorie" placeholder="Catagory" value="<?php echo $row["Categories"];?>"required>
                      <input type="file" name="imageFile" placeholder="Upload a Picture Of Shoe" value="<?php echo $row["imagePath"];?>" required>
                     
                      <?php $_SESSION["imagePath"] = $row["imagePath"]; ?>
                        
                        
                       

                            
                </fieldset>
                
                <fieldset>
                            <legend><span class="number">2</span> Price Details</legend>
                            <input type="text" name="txtPrice" placeholder="Enter Market Price" >
                            <!-- <label for="txtPublish">Publish the Advertisement : 
                            <input type="checkbox" name="txtPublish" <?php if ($row["txtpublish"] == 1) echo "checked"; ?>>
                            </label> -->
                </fieldset>
                          
                      <input type="submit" name="btnsubmit" value="Edit Post" />
                      </form>
      </div>
</body>
</html>