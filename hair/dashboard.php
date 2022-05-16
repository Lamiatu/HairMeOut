<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
</head>
<?php 
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: AdminLogin.php");
    exit;
} 
 ?>
<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <!-- <span class="icon"> -->
                            <!-- <ion-icon name="home-outline"></ion-icon> -->
                        <!-- </span> -->
                        <!-- <b><span class="title">Hair Me Out </span></b> -->
                        <img alt="logo" src="images/Logo.jpeg" class="logo" style="height: 124px!important; width: 95%!important;">
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="add-products.php">
                        <span class="icon">
                            <ion-icon name="add-outline"></ion-icon>
                        </span>
                        <span class="title">Add Products</span>
                    </a>
                </li>

                <li>
                    <a href="all-products.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">All Products</span>
                    </a>
                </li>

                <li>
                    <a href="reviews.php">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="title">Reviews</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li> -->

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
<?php include 'config.php'; 

$t_products = "SELECT * from products";
if ($result = mysqli_query($conn, $t_products)) {
    // Return the number of rows in result set
    $product = mysqli_num_rows( $result ); }

$t_comments = "SELECT * from reviews";
if ($result = mysqli_query($conn, $t_comments)) {
    // Return the number of rows in result set
    $comments = mysqli_num_rows( $result ); }
?>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!-- <div class="user">
                    <img src="imgs/customer01.jpg" alt="">
                </div> -->
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">

                <div class="card">
                    <div>
                        <div class="numbers"> <?php echo $product; ?> </div>
                        <div class="cardName">Products</div>
                    </div>

                    <div class="iconBx">
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"> <?php echo $comments; ?> </div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                    </div>
                </div>

                <!-- <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div> -->
            </div>

            <!-- ================ Product Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Added Products</h2>
                        <a href="all-products.php" class="btn">View All Products</a>
                    </div>

                    <table class="table table-image">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <!-- <th scope="col">Action</th> -->
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            $sql = "SELECT *
FROM products
ORDER BY id DESC
LIMIT 3;";
                             $result = $conn->query($sql); 

                                
                                  // output data of each row 
                             $i=1;
                                  while($row = $result->fetch_assoc()) 
                                  {
                                    // print_r($row);
                                  
                             ?>
                          <tr>
                            <th><?php echo $i; ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td style="width: 10%;"><img src="uploads/<?php echo $row['image']; ?>" class="img-fluid img-thumbnail" alt="Sheep"></td>
                            <!-- <td><p><button class="button">Update</button><br><br><button class="button" style="background-color: red;">Delete</button></p></td> -->
                          </tr>
                          <?php  $i++;} ?>
                        </tbody>
                      </table>
                </div>

                <!-- ================= New Customers ================ -->
                
            </div>
        </div>
    </div>
    <!-- =========== Scripts =========  -->
    <!-- <script src="assets/js/main.js"></script> -->

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        // add hovered class to selected list item
    let list = document.querySelectorAll(".navigation li");
    
    function activeLink() {
      list.forEach((item) => {
        item.classList.remove("hovered");
      });
      this.classList.add("hovered");
    }
    
    list.forEach((item) => item.addEventListener("mouseover", activeLink));
    
    // Menu Toggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector(".navigation");
    let main = document.querySelector(".main");
    
    toggle.onclick = function () {
      navigation.classList.toggle("active");
      main.classList.toggle("active");
    };
    </script>
</body>

</html>