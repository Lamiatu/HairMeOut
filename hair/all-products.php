<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
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
                        <!-- <b><span class="title">Hair Me Out</span></b> -->
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
            </div>
                <!--  -->


                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>All Products</h2>
                            <a href="add-products.php" class="btn">Add Product</a>
                        </div>
    
                        <table class="table table-image">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include("config.php"); 

                                $sql = "SELECT * FROM `products` ";
                                $result = $conn->query($sql);
                                $i=1;
                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                ?>
                              <tr>
                                <th><?php echo $i; ?></th>
                                <th><?php echo $row['name']; ?></th>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td style="width: 10%;"><img src="uploads/<?php echo $row['image']; ?>" class="img-fluid img-thumbnail" alt="Sheep"></td>
                                <td><p><button class="button" onclick="update('<?php echo $id;?>');">Update</button><br><br>
                                <button class="button" style="background-color: red;" onclick="del('<?php echo $id;?>');">Delete</button></p></td> 
                                <?php 
                                $i++;
                                }
                                } 
                                else 
                                {
                                  echo "No Products Added Available!";
                                }
                                 ?>   
                            </tr>
                            </tbody>
                          </table>
                    </div>
    
                    <!-- ================= New Customers ================ -->
                    
                </div>



                            
                <!--  -->
        </div>
    </div>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
// 
function update(id)
{
    window.location.href = "update-product.php?id="+id;
}

// 
function del(id)
{

if (window.confirm('Are you sure want to delete the product?'))
 {
   $.ajax({
    url: "delete-product.php",
    type: "POST",
    cache: false,
    data:{id: id},
    success: function(result){
        var result = JSON.parse(result);
        if(result.statusCode==200){
            alert("Deleted!");
            window.location.href = 'all-products.php';
        }
    }
});
}
}

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