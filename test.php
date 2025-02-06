<?php
session_start();
	if(!isset($_SESSION["email"])){
		header("Location:login.php");
	}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin - Novatech</title>
    
    <script src="https://kit.fontawesome.com/c37001a085.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/admin.css">
    
    <link rel="shortcut icon" href="img/mylogo3.png">
    
</head>

<body>

    <section id="menu">
        <div class="logo">
            <a href="index.html"><img src="./img/sitelogo.png" class="logo"></a>
        </div>

        <div class="items">
            <li><i class="fa-solid fa-screwdriver-wrench"></i><a href="#interface">Dashboard</a></li>
            <li><i class="fa-solid fa-shapes"></i><a href="#cart">Products</a></li>
            <li><i class="fa-solid fa-file-lines"></i><a href="#con-settings">My products</a></li>
            <li><i class="fa-solid fa-truck"></i><a href="#orders">Orders</a></li>
            <li><i class="fa-solid fa-users"></i><a href="#users">Customers</a></li>
            <li><i class="fa-solid fa-gear"></i><a href="#">Settings</a></li>
            <li><i class="fa-solid fa-user"></i><a href="login.html">Admin login</a></li>
        </div>
    </section>

    
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div class="search">
                    <input type="text" placeholder="Search settings">
                </div>

                <div class="profile">
                    <h4><?php echo date('d/m/y'); ?></h4>
                    <i class="fa-solid fa-gear"></i>
                    <a href="login.html"><img src="./img/avatar.jpg" class="logo"></a>
                </div>
            </div>
        </div>

        <h3 class="i-name">
            Dashboard
            <a href="index.html">
                <button type="button" class="normal">Go to site</button>
            </a>
        </h3>

        <?php
            $con = mysqli_connect("localhost", "root", "", "novatech_database", "3306");
            if (!$con) {
                die("Sorry, you can't connect to the database.");
            }
            $sql = "SELECT * FROM `product_tbl`";
            $results = mysqli_query($con, $sql);
            $num_results = mysqli_num_rows($results);

            $sql2 = "SELECT * FROM `user_tbl`";
            $results2 = mysqli_query($con, $sql2);
            $num_results2 = mysqli_num_rows($results2);

            if (mysqli_num_rows($results) > 0 || mysqli_num_rows($results2) > 0) {
        ?>

        <div class="values">
            <div class="val-box">
                <i class="fa-solid fa-shapes"></i>
                <div>

                    <?php
                        echo "<h3>$num_results</h3>";
                        
                    ?>
                    <span>Products</span>

                </div>
            </div>

            <div class="val-box">
                <i class="fa-solid fa-bag-shopping"></i>
                <div>
                    <h3>150</h3>
                    <span>Total orders</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fa-solid fa-money-bill"></i>
                <div>
                    <h3>Rs. 150,000</h3>
                    <span>Income</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fa-solid fa-user"></i>
                <div>
                    <?php
                        echo "<h3>$num_results2</h3>";
                        }
                    ?>
                    <span>New Users</span>
                    
                </div>
            </div>
        </div>
        <br><br>

        <!-- <div class="stats">
            <div class="stat1">
                <img src="/img/admin/image4-768x398.png">
            </div>
            
            <div class="stat1">
                <img src="/img/admin/Graph2.png">
            </div>
        </div> -->


        <br><br>
        <section id="feature" class="section-p1">

            <div class="fe-box">
                <img src="img/about/truck-solid (1).svg" style="width: 90px; height: 90px;">
                <h6>Orders completed: 150</h6>
            </div>
    
            <div class="fe-box">
                <img src="img/about/headset-solid (2).svg" style="width: 90px; height: 90px;">
                <h6>Customer satisfaction: 90%</h6>
            </div>
    
            <div class="fe-box">
                <img src="img/about/award-solid (1).svg" style="width: 90px; height: 90px;">
                <h6>Warranty</h6>
            </div>
    
            <div class="fe-box">
                <img src="img/about/screwdriver-wrench-solid (1).svg" style="width: 90px; height: 90px;">
                <h6>Repairs done: 23</h6>
            </div>
    
            <div class="fe-box">
                <img src="img/about/clock-solid (1).svg" style="width: 90px; height: 90px;">
                <h6>Site status: active</h6>
            </div>
    
        </section>

        <br><br><br>
        <hr>
        <br><br><br>

        <?php
            $con = mysqli_connect("localhost", "root", "", "novatech_database", "3306");
            if (!$con) {
                die("Sorry, you can't connect to the database.");
            }
            $sql = "SELECT * FROM `product_tbl`";
            $results = mysqli_query($con, $sql);
            $num_results = mysqli_num_rows($results);

            if (mysqli_num_rows($results) > 0) {
        ?>

        <section id="cart" class="section-p1">

            <h2>Product settings</h2>
            <table width="100%">
                <thead>
                    <tr>
                        <td>PRODUCT</td>
                        <td>NAME</td>
                        <td>PRICE</td>
                        <td>STOCK</td>
                        <td style="padding-left: 60px;">PUBLISHED BY</td>
                        <td></td>
                    </tr>
                </thead>
    

                <?php
                    while ($row = mysqli_fetch_assoc($results)) {
                ?>
                <tbody>
                    <tr>
                        
                        <td><img src="<?php echo $row["imagePath"]; ?>"></td>
    
                        <td><?php echo $row["productName"]; ?></td>
                        <td>Rs. <?php echo $row["price"]; ?></td>
                        <td><?php echo $row["stock"]; ?> items left</td>
                        <td style='color: red; padding-left: 40px; font-weight: 450;'><?php echo $row["email"]; ?></td>
                    </tr>
    
                </tbody>
                <?php
                    }
                ?>

            </table>
            <br>
            <?php
                echo "<div style='color: red; font-weight: 600; padding-left: 60px;'>Number of products: $num_results</div>";
            ?>
            <a href="AddProduct.php">
                <center><button class="normal"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Add product</button></center>
            </a>
    
        </section>

        <?php
            }
        ?>

        <br><br><br>
        <hr>
        <br><br><br>

        <?php
            $con = mysqli_connect("localhost", "root", "", "novatech_database", "3306");

            if (!$con) {
                die("Sorry, you can't connect to the database.");
            }
            $sql = "SELECT * FROM `product_tbl` WHERE `email` = '" . $_SESSION["email"] . "'";
            $results = mysqli_query($con, $sql);
            $num_results = mysqli_num_rows($results);

            if (mysqli_num_rows($results) > 0) {
        ?>

        <section id="cart" class="section-p1">

            <h2>My products</h2>
            <table width="100%">
                <thead>
                    <tr>
                        <td>PRODUCT</td>
                        <td>NAME</td>
                        <td>PRICE</td>
                        <td style='padding-right: 60px;'>STOCK</td>
                        <td style='color: red; font-weight: 600; padding-left: 50px;'><?php echo $_SESSION["email"]; ?></td>
                        <td></td>
                    </tr>
                </thead>
    
                <?php
                    while ($row = mysqli_fetch_assoc($results)) {
                ?>
                <tbody>
                
                    <tr>
                        
                        <td><img src="<?php echo $row["imagePath"] ?>"></td>
    
                        <td><?php echo $row["productName"]; ?></td>
                        <td>Rs. <?php echo $row["price"]; ?></td>
                        <td style='padding-right: 100px;'><?php echo $row["stock"]; ?> items left</td>

                        <td>
                        <a href='EditProduct.php?id=<?php echo $row["ProductID"]; ?>'>
                            <button class="normal"><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Edit</button>
                        </a></td>

                        <td>
                        <a href='DeleteProduct.php?id=<?php echo $row["ProductID"]; ?>'>
                            <button class="normal"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Remove</button>
                        </a></td>
                    </tr>
    
                </tbody>
                <?php
                    }
                ?>

            </table>
            <br>
            <?php
                echo "<div style='color: red; font-weight: 600; padding-left: 60px;'>Number of products: $num_results</div>";
            ?>
            <a href="AddProduct.php">
                <center><button class="normal"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Add product</button></center>
            </a>
    
        </section>

        <?php
            }
        ?>

        <br><br><br>
        <hr>
        <br><br>

        <section id="orders">

            <div class="recent_order">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>PRODUCT</th>
                            <th>ORDER ID</th>
                            <th>PAYMENT</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>JBL Tune Buds</td>
                            <td>#ORD2375</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td><button class="normal">Details</button></td>
                        </tr>

                        <tr>
                            <td>Soundcore Q120</td>
                            <td>#ORD2145</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td><button class="normal">Details</button></td>
                        </tr>
    
                        <tr>
                            <td>Galaxy Watch 4</td>
                            <td>#ORD9345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td><button class="normal">Details</button></td>
                        </tr>
    
                        <tr>
                            <td>Soundpeats Buds</td>
                            <td>#ORD2545</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td><button class="normal">Details</button></td>
                        </tr>
                    </tbody>
    
                </table>
                
            </div>

        </section>
        <br><br><br>


        <hr>
        <br><br>
        <section id="users">

            <div class="recent_order">
                <h2>Customers</h2>
                <table>
                    <thead>
                        <tr>
                            <th>USERNAME</th>
                            <th>EMAIL</th>
                            <th>ORDERS</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Rachinter</td>
                            <td>ashfaaq.rifath2@gmail.com</td>
                            <td>150</td>
                            <td class="warning">Active</td>
                            <td><button class="normal">Manage</button></td>
                        </tr>

                        <tr>
                            <td>John Doe</td>
                            <td>ashfaaq.rifath2@gmail.com</td>
                            <td>27</td>
                            <td class="warning">Active</td>
                            <td><button class="normal">Manage</button></td>
                        </tr>
    
                        <tr>
                            <td>Dunken</td>
                            <td>ashfaaq.rifath2@gmail.com</td>
                            <td>28</td>
                            <td class="warning">Active</td>
                            <td><button class="normal">Manage</button></td>
                        </tr>
    
                        <tr>
                            <td>Mudiyanse</td>
                            <td>ashfaaq.rifath2@gmail.com</td>
                            <td>15</td>
                            <td class="warning">Inactive</td>
                            <td><button class="normal">Manage</button></td>
                        </tr>
                    </tbody>
    
                </table>
                
            </div>

        </section>
        

        <br><br><br><br>
        <div class="copyright">
            <br>
            <p>Copyright © 2024 <a href="index.html">Novatech</a> - Developed by Ashfaaq Rifath</p>
        </div>
        <br><br>

    </section>



</body>
</html>