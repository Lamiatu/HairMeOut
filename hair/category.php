<?php session_start(); ?>
<!DOCTYPE html>
<html> 
    <head>
        <title>Curly hair products</title>
        <?php include("header.php"); ?>

    <body> 
     
<style>

.main-title{
  color: #2d2d2d;
  text-align: center;
  text-transform: capitalize;
  padding: 0.7em 0;
}

.container{
  padding: 1em 0;
  float: left;
  width: 50%;
}
@media screen and (max-width: 640px){
  .container{
    display: block;
    width: 100%;
  }
}

@media screen and (min-width: 900px){
  .container{
    width: 33.33333%;
  }
}

.container .title{
  color: #1a1a1a;
  text-align: center;
  margin-bottom: 10px;
}

.content {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: auto;
  overflow: hidden;
  border-radius: 25px;
    box-shadow: 0px 1px 12px 5px #bcb4b4;
}

.content .content-overlay {
  background: rgba(0,0,0,0.7);
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.content:hover .content-overlay{
  opacity: 1;
}

.content-image{
  width: 100%;
}

.content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content:hover .content-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content-details h3{
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.content-details p{
  color: #fff;
  font-size: 0.8em;
}

.fadeIn-bottom{
  top: 80%;
}

.fadeIn-top{
  top: 20%;
}

.fadeIn-left{
  left: 20%;
}

.fadeIn-right{
  left: 80%;
}
</style>
         <!-- <section class="section" id="about">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                      data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                      <div class="features-item">
                          <div class="features-icon">
                              <img src="images/straightHair.jpg" alt="straight hair">
                              <h4>Straight Hair Products Page</h4>
                              <a href="StarightHair.php" class="main-button">
                                  Straight Hair Category
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                      data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                      <div class="features-item">
                          <div class="features-icon">
                              <img src="images/curlyHair.jpg" alt="curly hair">
                              <h4>Curly Hair Products Page</h4>
                              <a href="CurlyHair.php" class="main-button">
                                Curly Hair Category
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                      data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                      <div class="features-item">
                          <div class="features-icon">
                              <img src="images/WavyHair.jpg" alt="">
                              <h4>Wavy Hair Products Page</h4>
                              <a href="WavyHair.php" class="main-button">
                                Wavy Hair Category
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section> -->


<div class="container">
  <h3 class="title">Straight Hair</h3>
  <div class="content">
    <a href="StarightHair.php">
      <div class="content-overlay"></div>
      <img class="content-image" src="images/straightHair.jpg">
      <div class="content-details fadeIn-bottom">
        <h3 class="content-title">Click</h3>
        <p class="content-text">To Find Best Products</p>
      </div>
    </a>
  </div>
</div>

<div class="container">
  <h3 class="title">Curly Hair</h3>
  <div class="content">
    <a href="CurlyHair.php">
      <div class="content-overlay"></div>
      <img class="content-image" src="images/curlyHair.jpg">
      <div class="content-details fadeIn-top">
        <h3>Click</h3>
        <p>To Find Best Products</p>
      </div>
    </a>
  </div>
</div>

<div class="container">
  <h3 class="title">Wavy Hair</h3>
  <div class="content">
    <a href="WavyHair.php">
      <div class="content-overlay"></div>
      <img class="content-image" src="images/WavyHair.jpg">
      <div class="content-details fadeIn-left">
        <h3>Click</h3>
        <p>To Find Best Products</p>
      </div>
    </a>
  </div>
</div>

<footer>
    <div class="footer">
        <div class="inner-footer">
      
      <!--  for company name and description -->
          <div class="footer-items">
            <h1><img src="images/Logo.jpeg" alt=""></h1>
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
    </footer>






    <?php include("footer.php"); ?>
      </body>


</html>