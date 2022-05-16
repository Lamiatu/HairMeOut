<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>

        <style>
            
body{
  background-color: #dfd2c2; 
  margin: 0;
  font-family: monospace;
    
}

.topnav {
  overflow: hidden;
  background-color: #f9f6f3;
  padding-right: 50px;

}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a.active:hover {
  color: burlywood;
}

.topnav a.active {
  color: black;
  padding-top:35px;
  padding-bottom: 10px;
  padding-left: 30px;

}

.logo{
    float: left;
    width: 80px;
}

.footer{
    overflow: hidden;
    float: bottom;
    background-color: #f9f6f3;
    bottom: 0;
    margin:auto;
    text-align: center;
    display: block;
    margin-top: 16.5%;

}

footer ul li {
  display: block;
  
}

footer ul li a {
  font-size: 14px;
  color: rgb(60, 54, 54);
  
}

footer ul li a:hover {
  color: #dfd2c2; 
}

footer h4 {
  letter-spacing: 0.5px;
  font-size: 16px;
  color: rgb(60, 54, 54);;
  font-weight: 700;

}

footer .under-footer {

  text-align: center;
  border-top: 1px solid rgba(250,250,250,0.3);
}

footer .under-footer ul {
  margin-top: 10px;
}

footer .under-footer ul li {
  display: inline-block;

}

footer .under-footer ul li a {
  font-size: 22px;
}

footer .under-footer p {
  color: rgb(60, 54, 54);
  font-size: 14px;
  font-weight: 300;
}

footer .under-footer a {
  color: rgb(60, 54, 54);
}

footer .under-footer a:hover {
  color: #dfd2c2; 
}

footer .col-lg-3{
    display: inline-block;
    padding:10px;
}

footer .first-item{
   display: block;
}

#top {
  margin-top:10px;
  margin-bottom:30px;
  background-image: url(backk.jpg);
  background-position: center center;
  background-size: 100%;
  background-repeat: no-repeat;
  color:#e7e4e1;
  font-size: 14px;
}

#top h2{
    color:#dfd2c2;
    font-size: 30px;
  font-weight: 700;
    text-decoration: underline;
}

.about-us {
  margin-top: 20px;
  display:inline-flex;
}

.about-us .left-image img {
  width: 100%;
  overflow: hidden;
}

.about-us .right-content {
  margin-left: 40px;
}

.about-us .right-content h4 {
  font-size: 34px;
  font-weight: 700;
  color: #41301b;
  text-decoration: underline;
}

.about-us .right-content span {
  font-size: 16px;
  color: #41301b;
  font-weight:500;
  display: block;

}


        </style>
    </head>

    <body>
        <div class="topnav">
            <img alt="logo" src="HairMeOut.jpg" class="logo">
            <a class="active" href="Login.php">Login</a>>
            <a class="active" href="category.php">Hair categories</a>
            <a class="active" href="index.php">Home</a>
         </div> 

         <div class="page-heading" id="top">
            <h2>About Our Website</h2>
                <p>We are building Hair Me Out website to help women who are tired of searching for the perfect hair product to take care of their hair in a way that suits the nature of their hair. 
                <br>Hair me out shows products that have been uploaded by the user with a rate of the product, information about it, an explanation of how to use it, and what kind of hair it suits. 
                <br>Also, the products with the highest ratings will be recommended to other users. 
                <br>What makes Hair Me Out distinct from other hair care websites is that it is based on the product, not the nature of the hair. That means it is not exclusive to one hair type over another. <br> <br></p>
            
        </div>

        <div class="about-us">
            <div class="container">
                
                 <div class="left-image">
                            <img src="products.jpg" alt="">
                </div>
                    </div>
                   
                        <div class="right-content">
                           <h4>Our Objectives</h4>
                            <span>1- To give honest user feedback so that users can make better purchase decisions.</span><br>
                            <span>2- To provide a website for users to share their personal product experiences.</span>

                </div>
            </div>

            <footer>
              <div class="footer">
                  <div class="inner-footer">
                
                <!--  for company name and description -->
                    <div class="footer-items">
                      <h1><img src="Logo.jpeg" alt=""></h1>
                      <!-- <p>Description of any product or motto of the company.</p> -->
                    </div>
                
                <!--  for quick links  -->
                    <div class="footer-items">
                      <h3>Useful Links</h3>
                      <div class="border1"></div> <!--for the underline -->
                        <ul>
                          <a href="index.php">Home page</a>
                          <a href="Aboutus.php">About Us</a>
                        </ul>
                    </div>
                
                <!--  for some other links -->
                    <div class="footer-items">
                      <h3>Categories</h3>
                      <div class="border1"></div>  <!--for the underline -->
                        <ul>
                          <li><a href="StarightHair.php"><li>Straight Hair</li></a></li>
                          <li><a href="CurlyHair.php"><li>Curly Hair</li></a></li>
                          <li><a href="WavyHair.php"><li>Wavy Hair</li></a></li>
                        </ul>
                    </div>
                
                <!--  for contact us info -->
                    <div class="footer-items">
                      <h3>Contact us</h3>
                      <div class="border1"></div>
                        <ul>
                          <li><i class="fa fa-phone" aria-hidden="true"></i>010-020-030</li>
                          <li><i class="fa fa-envelope" aria-hidden="true"></i>HairMeOut@company.com</li>
                        </ul> 
                      
                <!--   for social links -->
                        <div class="social-media">
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-facebook"></i></a>
                          <a href="#"><i class="fab fa-google-plus-square"></i></a>
                        </div> 
                    </div>
                  </div>
                  
                <!--   Footer Bottom start  -->
                  <div class="footer-bottom">
                    Copyright © 2022 Hair Me Out, All Rights Reserved.
                  </div>
                </div>
                  
          <style>
              /* FOOTER */
          .footer {
            width: 100%;
            background: #fff;
            display: block;
           }
          
           .inner-footer {
             width: 95%;
             margin: auto;
             padding: 30px 10px;
             display: flex;
             flex-wrap: wrap;
             box-sizing: border-box;
             justify-content: center;
           }
          
          .footer-items {
            width: 25%;
            padding: 10px 20px;
            box-sizing: border-box;
            color: #000;
          }
          
          .footer-items p {
            font-size: 16px;
            text-align: justify;
            line-height: 25px;
            color: #000;
          }
          
          .footer-items h1 {
            color: #000;
          }
          
          .border1 {
            height: 3px;
            width: 40px;
            background: #000;
            color: #000;
            background-color: #000;
            border: 0px;
          }
          
          ul {
            list-style: none;
            color: #000;
            font-size: 15px;
            letter-spacing: 0.5px;	
           }
          
          ul a {
            text-decoration: none;
            outline: none;
            color: #000;
            transition: 0.3s;
          }
          
          ul a:hover {
            color: #000;
          }
          
          ul li {
            margin: 10px 0;
            height: 25px;
          }
          
          li i {
            margin-right: 20px;
          }
          
          .social-media {
            width: 100%;
            color: #000;
            text-align: center;
            font-size: 20px;
          }
          
          .social-media a {
            text-decoration: none;
          }
          
          .social-media i {
            height: 25px;
            width: 25px;
            margin: 20px 10px;
            padding: 4px;
            color: #000;
            transition: 0.5s;
          }
          
          .social-media i:hover {
            transform: scale(1.5);
          }
          
          .footer-bottom {
            padding: 10px;
            background: #fff;
            color: #000;
            font-size: 12px;
            text-align: center;
          }
          
          /* for tablet mode view */
          
          @media screen and (max-width: 1275px) {
            .footer-items {
              width: 50%;
            }
          }
          
          /* for mobile screen view */
          
          @media screen and (max-width: 660px) {
            .footer-items {
              width: 100%;
            }
          }
          
          </style>
    </body>
</html>