<!DOCTYPE html>
<?php
    include("config.php");
    session_start();

    if (isset($_POST['login'])) {
        // code...
        $name = $_POST['name'];
        $pass = $_POST['pw'];

    $sql=mysqli_query($conn,"SELECT * FROM user where name='$name' and password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["name"]=$row['name'];
        $_SESSION["loggedin"] = true;
        
        echo "<script>alert('Login!')</script>";
        header("Location: index.php"); 
    }
    else
    {
        echo "<script>alert('Invalid Username/Password')</script>";
    }
}
?>
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
           <div class="Logcontainer">

             <h1>Log In</h1>
             <p>Welcome Back!</p>
             <hr>
             
                <label> User Name:</label>  
                <br>
                <input type="text" name="name" required="">
                <br>
                <label> password:</label>  
                <br>
                <input type="password" name="pw" required="">   
                
               
                <input type="submit" value="Log in" class="signupbtn" name="login">
                <p>  New User? <a href="UserRegister.php">Sign-up</a> </p>  

                
           </div>
        </form>        
        
        
    </body>
</html>
