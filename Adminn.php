<?php
session_start();
	if(!isset($_SESSION["email"])){
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- link css file -->
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- <link rel="stylesheet" href="css/adminn.css"> -->
    

    <!-- fav icon -->
    <link rel="shortcut icon" href="image/icon.png" type="image/SF-icon">

</head>
<body>
    


    <div class="container">
        <aside>
             
           <div class="top">
             <div class="logo">
               <h2><span class="danger">Sujith Furniture</span></h2>
             </div>
             <br>
             
           </div>
           <!-- end top -->
            <div class="sidebar">
             
             <a href="addAdverteesment.php" class="">
                <h2>Add product</h2>
             </a>

          
            </div>  
       
        </aside> 

      <!----------------- start main part  ------------------>
     <br><br><br>
     <main>

        <?php
            $con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");

            if (!$con) {
                die("Sorry, you can't connect to the database.");
            }
            $sql = "SELECT * FROM `product` ";
            $results = mysqli_query($con, $sql);
            $num_results = mysqli_num_rows($results);

            if (mysqli_num_rows($results) > 0) {
        ?>
        <section id="cart" class="section-p1">

            <h2>Remove and Edit products</h2>
            <br><br><br><br><br>
            <table width="100%">
                <thead>
                    <tr>
                        <td>PRODUCT</td>
                        <td>NAME</td>
                        <td>PRICE</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
    
                <?php
                    while ($row = mysqli_fetch_assoc($results)) {
                ?>
                <tbody>
                
                    <tr>
                        
                        <td><img src="<?php echo $row["imagePath"] ?>"></td>
    
                        <td><?php echo $row["ProductName"]; ?></td>
                        <td>Rs. <?php echo $row["Price"]; ?>.00</td>
                        
                        <td>
                        <a  href='EditAdvertisement.php?id=<?php echo $row["AddID"]; ?>'>
                        <input type="submit" name="btnRegister" value="Edit" class="btn">
                        </a></td>

                        <td>
                        <a href='DeleteAdvertisement.php?id=<?php echo $row["AddID"]; ?>'>
                            <input type="submit" name="btnRegister" value="Delete" class="btn">
                        </a></td>
                    </tr>
    
                </tbody>
                <?php
                    }
                  }
                ?>

            </table>
            <br>   
            <br><br><br>


            
        <?php
            $con = mysqli_connect("localhost", "root", "", "sujithfurniture", "3306");
        
            if(!$con){
              die("Sorry, you can't connect to the database.");
            }
        
            $sql = "SELECT * FROM `orderview`";
            $results = mysqli_query($con, $sql);
            $num_results = mysqli_num_rows($results);

            if (mysqli_num_rows($results) > 0) {
        ?>

        <section id="orders">

            <div class="recent_order">
                <h2>User purchases Details...</h2>
                <table width="100%">

                    <thead>
                        <tr>
                            <th>ORDER ID</th><br>
                            <th>DATE OF ORDER</th>
                            <th>EMAIL</th>
                            <th>PRODUCT NAME</th>
                            <th>INCOME</th>
                            <th>ADDRESS</th>
                        </tr>
                    </thead>

                    <?php
                        while ($row = mysqli_fetch_assoc($results)) {
                    ?>

                    <tbody>
                        <tr>
                            <td><?php echo $row["cartNum"]; ?></td>
                            <td><?php echo $row["dateOfOrder"]; ?></td>
                            <td><?php echo $row["Email"]; ?></td>
                            <td><?php echo $row["Product"]; ?></td>
                            <td>RS <?php echo $row["totalCost"]; ?>.00</td>
                            <td><?php echo $row["Address"]; ?></td>
                        </tr>

                    </tbody>
                    <?php
                        }
                    ?>

                </table>
                
            </div>

            </section>
        <?php
            }
        ?>

        <br><br><br>

    </section>
   <!------------------end main------------------->
    </div>
     <!-- script file -->
     <script src="script.js"></script>
</body>
</html>