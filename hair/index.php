<?php session_start(); 
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  // header("location: UserLogin.php");
  // exit;
} 
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Home Page</title>
</head>

<body>
<?php include("header.php"); ?>

<h1>Top Rated Products</h1>
<br>
<br> 

<div class="container">
<div class="row">
<?php 
include("config.php");
$sql = "select page_id, count(rating) 
       from reviews 
       group by page_id 
       order by count(rating) 
       desc limit 4;";
  $result = $conn->query($sql);
  foreach ($result as $val) {
  	// code...
  	$ids = $val['page_id'];

  	$sql2 = "select * from products WHERE `id` IN ('$ids')";

  	$res = $conn->query($sql2);
  foreach ($res as $vals) 
  {
  	// print_r($vals);

  	?>
    <div class="col-md-3 mb-2">
      <div class="card h-auto">
        <div class="d-flex justify-content-between position-absolute w-100">
          <div class="label-new">
            <span class="text-white bg-success small d-flex align-items-center px-2 py-1">
              <i class="fa fa-star" aria-hidden="true"></i>
              <span class="ml-1">Top rated</span>
            </span>
          </div>
          
        </div>
        <a href="viewPreviews.php?id=<?php echo $vals['id']; ?>">
          <img src="uploads/<?php echo $vals['image']; ?>" class="card-img-top" alt="Product">
        </a>
        <div class="card-body px-2 pb-2 pt-1" style="background-color: #f9f9f9;">
          <div class="d-flex justify-content-between">
          </div>
          <p class="text-warning d-flex align-items-center mb-2">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </p>
          <p class="mb-0">
            <strong>
              <a href="viewPreviews.php?id=<?php echo $vals['id']; ?>" class="text-secondary"><?php echo $vals['name']; ?></a>
            </strong> 
          </p>
        </div>
      </div>
    </div>




<?php } } ?>
</div>
				  </div>
              
		

</main>

<?php include("footer.php"); ?>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>