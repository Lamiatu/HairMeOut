<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

include("config.php");
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    // header("location: UserLogin.php");
    // exit;
}


$user_id = $_SESSION["id"];
$email = $_SESSION["email"];
$uname = $_SESSION["name"];
$product_id = $_GET['id']; 

?>
<html>
    <head>
        <title>Edit Review</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/Nstyle.css">
        <script src="js/Njavascript.js" ></script>
    </head>
    
    <body>
        
        <div class="topnav">
            <img alt="logo" src="images/HairMeOut.jpg" class="logo">
            <a class="active" href="logout.php">LogOut</a>
            <a class="active" href="category.php">Hair categories</a>
            <a class="active" href="index.php">Home</a>
        </div> 
<?php 
$sql = "SELECT * FROM `products` WHERE id='$product_id'";
    $result = $conn->query($sql);
    foreach ($result as $val) {
        // code...
        $val['name'];
        $val['desc'];
        $val['image'];
    }
 ?>  
        <div class="containerprod"> 

            <div class="userproductrev">
              <h2>Share your Experience!</h2>

              <img alt="productpic" src="uploads/<?php echo $val['image']; ?>" class="prodimg">
              <br/>
              <h3> <?php echo $val['name']; ?> </h3>
              
              <form class="updaterev" action="">
               <p> Rate:</p> 
               <input type="number" id="quantity" name="quantity" min="1" max="5">
              <br/>
              <br/>
              <p> Write a review:</p>
               <textarea id="revtext" name="review" rows="5" cols="50"></textarea>
              
              </form>
              
              <button type="button" class="editrev2" onclick="toprof(); return false;">Share</button>


            </div>
 
            
            
        </div>
                
        
        
        
        
        
        
        
    </body>
    
</html>
