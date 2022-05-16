<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>HairMeOut</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/Nstyle.css">
        <script src="js/Njavascript.js" ></script>

    </head>
    <body>
        
         <div class="topnav">
            <img alt="logo" src="images/HairMeOut.jpg" class="logo">
            <a class="active" href="Login.php">Login</a>
            <a class="active" href="UserRegister.php">Register</a>
            <!-- <a class="active" href="category.php">Hair categories</a>
            <a class="active" href="index.php">Home</a> -->
         </div> 
        
         <form method="POST">
           <div class="container">

             <h1>Sign Up</h1>
             <p>Please fill this form to create an account.</p>
             <hr>
             
                <label> UserName:        </label>  
                <br>
                <input type ="text" name="name" required="">
                <br>
                <label> password:  </label>  
                <br>
                <input type ="password" name="password" required="">   
                <br>
                <label> Email:        </label>  
                <input type="email" name="email" required="">
                
               
                <input type="submit" name="register" value="Sign Up" class="signupbtn">
                
           </div>
        </form>
    </body>
</html>

<?php 
include("config.php");
// 
if (isset($_POST['register'])) {
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `user`(`name`, `password`, `email`) VALUES ('$name', '$password', '$email')";
        
       if(mysqli_query($conn, $sql)) 
       {
            echo '<script>alert("Registered Successfully!")</script>';
            header('Location: UserLogin.php');
       }
       else
       {
            echo '<script>alert("Something went wrong, try again latter!")</script>';
       }

}

 ?>
