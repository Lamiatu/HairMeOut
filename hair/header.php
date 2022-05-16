<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



  <!-- header Nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="images/Logo.jpeg" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="font-size: 20px;" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" style="font-size: 20px;" href="#">Login</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="font-size: 20px;" href="category.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hair categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="category.php">All Categories</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="StarightHair.php">Straight Hair</a>
          <a class="dropdown-item" href="CurlyHair.php">Curly Hair</a>
          <a class="dropdown-item" href="WavyHair.php">Wavy Hair</a>
        </div>
      </li>
      <?php 
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  ?>

<li class="nav-item">
        <a class="nav-link" style="font-size: 20px;" href="Login.php">Login</a>
      </li>
  <?php
} else
{
  ?>
<li class="nav-item">
        <a class="nav-link" style="font-size: 20px;" href="logout.php">Logout</a>
      </li>

  <?php
}
?>
      
    </ul>
    <form method="POST" action="search-product.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="text" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="search">Search</button>
    </form>
  </div>
</nav>
<!-- header nav end -->

<!-- for additional spacing after Header -->
<div style="height: 150px;"></div>
