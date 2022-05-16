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
include("config.php");
$id=$_GET['id'];
$results = '';

if (isset($_POST['update'])) {
    // code...

    $name = $_POST['pname'];
    $desc = $_POST['desc'];
    // for image
    if ($_FILES['pic']['name'] == "") {

        $sql = "UPDATE `products` SET `name`='$name', `description`='$desc' WHERE id='$id'";
        
        if (mysqli_query($conn, $sql)) {
        $results='<div class="alert alert-success">Product Updated Sucessfully !</div>';
        }else {
            $results='<div class="alert alert-danger">Sorry there was an error. Please try again later</div>';
            // echo "Error: " . $sql . "" . mysqli_error($conn);
        }


    }else
    {
        
        $output_dir  = "uploads/";/* Path for file upload */
        $RandomNum   = time();
        $ImageName   = str_replace(' ','-',strtolower($_FILES['pic']['name']));
        $ImageType   = $_FILES['pic']['type'];

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

        move_uploaded_file($_FILES["pic"]["tmp_name"],$output_dir."/".$NewImageName );

        $sql = "UPDATE `products` SET `name`='$name', `description`='$desc', `image`='$NewImageName' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
          echo "Record updated successfully1";
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }
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
                        <!-- <span class="icon"> -->
                            <!-- <ion-icon name="home-outline"></ion-icon> -->
                        <!-- </span> -->
                        <b><span class="title">Hair Me Out</span></b>
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
<?php 
        $sql = "SELECT * FROM `products` WHERE id = $id";
        $result = $conn->query($sql);
         while($row = $result->fetch_assoc()) 
         {
          $name = $row['name'];
          $desc = $row['description'];
          $img = $row['image'];
          
         }

 ?>
          <p style="text-align:center;"><h2>Update Product</h2></p>
            <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
                <form action="" method="POST" enctype="multipart/form-data">
                  <label for="fname">Product Name</label>
                  <input type="text" id="pname" name="pname" value="<?php echo $name; ?>" placeholder="Product name.." required="">
              
                  <label for="lname">Description</label>
                  <input type="text" id="desc" name="desc" value="<?php echo $desc; ?>" required="">
              

                  <img src="uploads/<?php echo $img; ?>" alt="" height="150" width="150"><br><br>
                  <label for="country">Image</label><br><br>
                  <input class="form-control" name="pic" type="file">
<br><br>
                  <div class="row">
                        <br>
                        <p><?php echo $results; ?></p>
                    </div>
                
                  <input type="submit" name="update" value="Update Product">
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
