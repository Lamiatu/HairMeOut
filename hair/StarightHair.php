<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Straight hair products</title>
</head>

<body>
<?php include("header.php"); ?>
<h1>Straight hair products</h1>
<br>
<br>
<div class="container">
<div class="row">

<?php 
include("config.php");
// Initialize the session

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    // header("location: UserLogin.php");
    // exit;
}  

@$id = $_SESSION["id"];
@$email = $_SESSION["email"];
@$uname = $_SESSION["name"];

  
    $sql = "SELECT * FROM `products` WHERE category='StraightHair'";
    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {
      // output data of each row 
      while($row = $result->fetch_assoc()) {
        $id = $row['id'];
 ?>
        
<div class="col-md-3 mb-2">
      <div class="card h-auto">
        <div class="d-flex justify-content-between position-absolute w-100">
          <div class="label-new">
            <span class="text-white bg-success small d-flex align-items-center px-2 py-1">
              <i class="fa fa-star" aria-hidden="true"></i>
              <span class="ml-1">New</span>
            </span>
          </div>
          
        </div>
        <a href="viewPreviews.php?id=<?php echo $id ?>">
          <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="Product">
        </a>
        <div class="card-body px-2 pb-2 pt-1" style="background-color: #f9f9f9;">
          <div class="d-flex justify-content-between">
          </div>
          <!-- <p class="text-warning d-flex align-items-center mb-2">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </p> -->
          <p class="mb-0">
            <strong>
              <a href="viewPreviews.php?id=<?php echo $id ?>" class="text-secondary"><?php echo $row['name']; ?></a>
            </strong>
          </p>
          <p class="mb-0">
              <a href="viewPreviews.php?id=<?php echo $id ?>">Show Reviews</a>
          </p>
        </div>
      </div>
    </div>


<?php }} ?>
</div></div>
       <?php include("footer.php"); ?>
    </body>


</html>