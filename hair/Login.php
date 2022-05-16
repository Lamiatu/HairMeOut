<!DOCTYPE html>


<html>
    <head>
        <title>HairMeOut</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/Nstyle.css">
    </head>
    
    
    <body>
         <div class="topnav">
            <img alt="logo" src="images/HairMeOut.jpg" class="logo">
            <a class="active" href="Login.php">Login</a>
            <a class="active" href="UserRegister.php">Register</a>
            <!-- <a class="active" href="">Hair categories</a>
            <a class="active" href="index.php">Home</a> -->
         </div> 
        
        
        <div class="Homecontainer"> 
                <h1>Welcome to HairMeOut </h1>
             
                 <button onclick="window.location.href='UserLogin.php';">User Log-In</button>
                 <button onclick="window.location.href='AdminLogin.php';">Admin Log-In </button>
                 <p>  New User? <a href="UserRegister.php">Sign-up</a> </p>  
        </div>

        
    </body>
</html>
