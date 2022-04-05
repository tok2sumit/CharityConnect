<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Dashboard</title>
    

    <!--Css-->
    
    <link rel="stylesheet" href="css/bootstrap.css">
   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
  
   <style>
 
h5 {
    display: inline-block;
    margin-left: 10px;
    margin-top: 52px;
}

h5 a {
    border: 1px solid #fff;
    border-radius: 25px;
    color: #fff;
    font-family: "Roboto", sans-serif;
    font-size: 16px;
    font-weight: 500;
    padding: 15px 40px;
    text-decoration: none;
}

h5.white-button a {
    background: #fff;
    color: #01d262;
    text-decoration: none;
}
h5 a:hover {
    background: #01d262;
    color: #fff;
    text-decoration: none;
}

.btn:link,.btn:visited {
  background-color: white;
  color: black;
  font-size:18px;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.btn:hover,.btn:active {
  background-color: green;
  color: white;
}

/* css for heading */
.heading{
background: #2e2e2e; 
color: white;
text-align: center;
height: 80px;
border-radius: 8px;

}

.heading h1{
  padding-top: 12px;
}

/* css for video */
.contain{
    width: 100%;
    height: 36vh;
    position: relative;
    margin-bottom: 2px;
}

.contain video{
    width: 100%;
    height: 100%;
}
.text-box{
    position: absolute;
    top: 0;
    left: 0;
    background: #000;
    height: 100%;
    width: 100%;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 41px;
    font-weight: 900;
    mix-blend-mode: multiply;
}
</style>
</head>
<body>
   
  
    
<header class="header">
        <div class="header__content">
          <div class="header__logo-container">
            <div class="header__logo-img-cont">
                <img src="img/main-logo.png" alt="" class="header__logo-img">
            </div>
            <span class="header__logo-sub">CharityConnect</span>
          </div>
          <div class="header__main">
            <ul class="header__links">
              <li class="header__link-wrapper">
                <a href="admin_dashboard.php" style="margin-top: 12px;" class="btn btn-info ">Home</a>
              </li>
              
              <li class="header__link-wrapper">
                <a href="index.php" class="btn btn-info" style="margin-top: 12px;" >Logout</a> 
              </li>
            </ul>
            <div class="header__main-ham-menu-cont">
              <img src="img/ham-menu.svg" alt="hamburger menu" class="header__main-ham-menu">
            </div>
          </div>
        </div>
        <div class="header__sm-menu">
          <div class="header__sm-menu-content">
            <ul class="header__sm-menu-links">
              <li class="header__sm-menu-link">
                <a href="admin_dashboard.php"  class="btn btn-info">Home</a>
              </li>
              
              <li class="header__sm-menu-link">
                <a href="index.php" class="btn btn-info">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </header>
      
      <br>
      <br>
      <br>
      <br>
      

  <div class="heading">
    <h1>Admin Dashboard</h1>
  </div>
 

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">  
<div class="carousel-inner">
<div class="carousel-item active">
  <img src="img/carosal-bg.jpg" class="d-block w-100" alt="...">
  <div class="carousel-caption d-none d-md-block">
    
    <h5><a class="white-button" href="admin_NGO.php">NGO</a></h5>
    <h5><a class="white-button" href="admin_viewfeed.php">View feedback</a></h5>
   
  </div>
</div>  
</div>
</div>


<div class="contain">
<video autoplay loop muted>
  <source src="Video/video.mp4" type="video/mp4">
</video>
<div class="text-box">
      Charity Connect
</div> 
</div>

<footer class="footer">
<div class="container">
  <div class="row">
      <div class="col-md-4 col-sm-12">
          <div class="footer-charity-text">
              <h2>CHARITY CONNECT</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
              <hr>
              <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>
          </div>
      </div>
      <div class="col-md-8">
          <div class="row">
          
              <div class="col-md-4 col-sm-3">
                  <div class="footer-text two">
                      <h3>USEFUL LINKS</h3>
                      <ul>
                          <li><a href="admin_dashboard.php">Home</a></li>
                          <li><a href="index.php">logout</a></li>
                         
                      </ul>
                  </div>
              </div>
              <div class="col-md-4 col-sm-4">
                  <div class="footer-text one">
                      <h3>CONTACT US</h3>
                      <ul>
                          <li><a href="#">location_on TCET,mumbai,India</a></li>
                          <li><a href="#">email CharityConnect@gmail.com</a></li>
                          <li><a href="#">call +123456789</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="footer_bottom">
  <p>Copyright @ 2021 <a href="#">CharityConnect</a> | All Rights Reserved </p>
</div>
</footer>



<script>
const hamMenuBtn = document.querySelector('.header__main-ham-menu-cont')
const smallMenu = document.querySelector('.header__sm-menu')

hamMenuBtn.addEventListener('click', () => {
if (smallMenu.classList.contains('header__sm-menu--active')) {
  smallMenu.classList.remove('header__sm-menu--active')
} else {
  smallMenu.classList.add('header__sm-menu--active')
}
})
</script>  


    
</body>
</html>