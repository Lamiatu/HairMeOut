<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Home Page</title>
</head>

<body>
<?php include("header.php"); ?>

<h1>Search Product Result</h1>
<br>
<br> 

<div class="container">
<div class="row">



<?php 
include("config.php");

if (isset($_POST['search'])) {
  
  $search = $_POST['text'];

$sql = "select * from products where name like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($vals = $result->fetch_assoc() ){

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
          <!-- <p class="text-warning d-flex align-items-center mb-2">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </p> -->
          <p class="mb-0">
            <strong>
              <a href="viewPreviews.php?id=<?php echo $vals['id']; ?>" class="text-secondary"><?php echo $vals['name']; ?></a>
            </strong> 
          </p>
        </div>
      </div>
    </div>
<?php 

}
} else {
  ?>

  <p>No product found! <a href="javascript:history.go(-1)">click here to go back...</a></p>


<?php  
}

$conn->close();
}
 ?>

    </div>
          </div>

