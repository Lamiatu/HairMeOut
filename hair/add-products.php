<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
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
<?php include("config.php"); ?>
<?php 
//
$result = '';

if (isset($_POST['add'])) {
    
    //getting fields value by post method
    $name = $_POST['pname'];
    $desc = $_POST['desc'];
    $category = $_POST['category']; 

    // for image
    $output_dir  = "uploads/";/* Path for file upload */
    $RandomNum   = time();
    $ImageName   = str_replace(' ','-',strtolower($_FILES['image']['name']));
    $ImageType   = $_FILES['image']['type'];

    $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt       = str_replace('.','',$ImageExt);
    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;

    /* Try to create the directory if it does not exist */
    if (!file_exists($output_dir))
    {
        @mkdir($output_dir, 0777);
    }               
    move_uploaded_file($_FILES["image"]["tmp_name"],$output_dir."/".$NewImageName );
         $sql = "INSERT INTO `products`(`name`, `description`, `category`, `image`) VALUES ('$name', '$desc', '$category', '$NewImageName')";
        
       if (mysqli_query($conn, $sql)) {
$result='<div class="alert alert-success">Product Added Sucessfully !</div>';
}else {
    $result='<div class="alert alert-danger">Sorry there was an error. Please try again later</div>';
    // echo "Error: " . $sql . "" . mysqli_error($conn);
}

}

 ?>
<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
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

          <p style="text-align:center;"><h2>Add Product</h2></p>
            <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
                <form action="" method="POST" enctype="multipart/form-data">
                  <label for="fname">Product Name <span style="color: red;">*</span></label>
                  <input type="text" id="pname" name="pname" placeholder="Product name.." required="">
              
                  <label for="lname">Description <span style="color: red;">*</span></label>
                  <input type="text" id="desc" name="desc" placeholder="product description.." required="">

                  <label for="category">Category <span style="color: red;">*</span></label>
                  <select name="category" required="">
                      <option>Select Category</option>
                      <option value="StraightHair">Straigh tHair</option>
                      <option value="CurlyHair">Curly Hair</option>
                      <option value="WavyHair">Wavy Hair</option>
                  </select>
              
                  <label for="country">Image <span style="color:red;">*</span></label>
                  <br><br>
                  <input class="form-control" name="image" type="file" required="">
                
                    <div class="row">
                        <br>
                        <p><?php echo $result; ?></p>
                    </div>

                  <input type="submit" name="add" value="Add Product">
                </form>
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

