<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
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

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Review and Comments</h2>
                        <!-- <a href="all-products.php" class="btn">View All Products</a> -->
                    </div>

                    <table class="table table-image">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">User Name</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            include("config.php");
                            $sql = "SELECT * FROM reviews";
                            $result = $conn->query($sql);
                            $i=1;
                            foreach($result as $res)
                            {
                                $p_id = $res['page_id'];
                                $sql2 = "SELECT * FROM `products` WHERE id = '$p_id'";
                                $que = $conn->query($sql2);
                                foreach ($que as $val) {
                                        $p_name = $val['name'];
                                        $image = $val['image'];
                                        $category = $val['category'];
                                

                            

                             ?>
                          <tr>
                            <th><?php echo $i; ?></th>
                            <th><?php echo $p_name ?></th>
                            <td><?php echo $res['rating']; ?></td>
                            <td><?php echo $res['content']; ?></td>
                            <td><?php echo $category; ?></td>
                            <td style="width: 10%;"><img src="uploads/<?php echo $image; ?>" class="img-fluid img-thumbnail" alt="Sheep"></td>
                            <td><?php echo $res['name']; ?></td>    
                        </tr>
                        <?php $i++; } }?>
                        </tbody>
                      </table>
                </div>

                <!-- ================= New Customers ================ -->
                
            </div>
            
        
        
        </div>
        </div>
    
    
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