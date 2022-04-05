<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Requirements</title>

    <!--Css-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
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


/* css for footer */
.footer {
    background: #2e2e2e;
    padding-top: 40px
}

.footer .footer-charity-text {
    max-width: 345px;
}

.footer .footer-charity-text h2 {
    color: #fff;
    font-family: "Roboto", sans-serif;
    font-size: 25px;
    font-weight: 700;
    margin: 0 0 27px;
}

.footer .footer-charity-text p {
    color: rgb(91, 91, 91);
    font-family: "Roboto", sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: 30px;
}

.footer .footer-charity-text hr {
    border-color: rgb(91, 91, 91);
}

.footer .footer-charity-text p i {
    color: #5b5b5b;
    font-size: 18px;
    margin-right: 20px;
}

.footer-charity-text hr {
    margin: 35px 0;
}

.footer .footer-text h3 {
    color: #fff;
    font-family: "Roboto", sans-serif;
    font-size: 20px;
    font-weight: 700;
    margin: 8px 0 25px;
}

.footer .footer-text ul {
    margin: 0;
    padding: 0;
}

.footer .footer-text.one ul li {
    left: 7px;
    list-style: outside none none;
    padding-left: 20px;
    position: relative;
}

.footer .footer-text.one ul li i {
    color: rgb(91, 91, 91);
    font-size: 15px;
    left: -7px;
    position: absolute;
    top: 3px;
}

.footer .footer-text.one ul li a {
    color: rgb(91, 91, 91);
    font-family: "Roboto", sans-serif;
    font-size: 15px;
    font-weight: 400;
    text-decoration: none;
}

.footer .footer-text.two ul li a {
    color: rgb(91, 91, 91);
    font-family: "Roboto", sans-serif;
    font-size: 15px;
    font-weight: 400;
    text-decoration: none;
}

.footer .footer-text ul li {
    margin-bottom: 10px;
}

.footer .footer-text.two ul li a:hover,
.footer .footer-text.one ul li a:hover,
.footer .footer-text.one ul li i:hover,
.footer .footer-charity-text p i:hover {
    color: #c0c0c0;
}

.footer .footer_bottom p {
    background: #232323 none repeat scroll 0 0;
    color: #cacaca;
    font-family: "Roboto", sans-serif;
    font-size: 15px;
    font-weight: 400;
    height: 75px;
    line-height: 75px;
    margin: 20px 0 0;
    padding: 0;
    text-align: center;
}

.footer .footer_bottom p a {
    color: #2ad880;
    text-decoration: none;
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
                <a href="NGO_dashboard.html" style="margin-top: 12px;" class="btn btn-info ">Home</a>
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
                <a href="NGO_dashboard.html"  class="btn btn-info">Home</a>
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
      

      <div style="margin-bottom: 2%;" class="heading">
      <h1> <?php
    echo "<div style='font-size:20px;'>Welcome ". $_SESSION["user"]."</div>";
  ?> All Your Requirements</h1>
      </div>
     

<?php
include 'check.php';
      
       $id = $_SESSION["user"];      
            $query = "SELECT * FROM requirements where name = '$id' ORDER BY amount ASC";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)){
           
        ?>
        
         <div class="container">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h6 class="panel-title"> </h6>
          </div>
          <table class="table table-hover" id="dev-table">
            
              <tr>  
                <th>name</th>
                <th>Description</th>
                <th>date</th>
                <th>amount</th>
                
               
              </tr>
        <tr>
              
              <td> <?php echo $row['name'];?></td>
              <td><?php echo $row['description'];?></td>
              <td><?php echo $row['date'];?></td>
              <td><?php echo $row['amount'];?></td>
             
            
           
            
        </tr>

        </table>
        </div>
      </div>
          <?php
            }
            ?>
       


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
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Donate</a></li>
                              <li><a href="#">Contact us</a></li>
                              <li><a href="#">join now</a></li>
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