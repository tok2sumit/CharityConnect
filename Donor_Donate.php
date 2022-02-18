<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor_Donate</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style2.css">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    font-size: 50px;
    font-weight: 900;
    mix-blend-mode: multiply;
}



.box{
    width: 100%;
    padding: 40px;
    background-color: rgb(19, 52, 53);
    
}

.box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
    margin-bottom: 22px;
    margin-left: 38%;
}

.input1{
    border: 0;
    background: none;
    display: block;
    margin: 20px ;
    margin-left: 30%;
    border: 2px solid rgb(100, 157, 231);
    padding: 14px 10px;
    width: 40%;
    outline: none;
    color: white;
    border-radius: 20px;
    transition: 0.5s;
}

@media only screen and (max-width: 37.5em) {
     
    
    }
.input1:focus{
width: 45%;
border-color: rgb(191, 223, 132);  
}

.input1[type="submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px ;
    margin-left: 35%;
    border: 2px solid rgb(191, 223, 132);
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.5s;
    width: 30%;
}

.input1[type="submit"]:hover{
background-color: yellowgreen;
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
                <a href="Donor_dashboard.php" style="margin-top: 12px;" class="btn btn-info ">Home</a>
              </li>
              <li class="header__link-wrapper">
                <a href="Donor_feedback.php" style="margin-top: 12px;" class="btn btn-info ">feedback</a>
              </li>
              <li class="header__link-wrapper">
                <a href="home.html" class="btn btn-info" style="margin-top: 12px;" >Logout</a> 
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
                <a href="Donor_dashboard.php"  class="btn btn-info">Home</a>
              </li>
              <li class="header__sm-menu-link">
                <a href="Donor_feedback.php"  class="btn btn-info">feedback</a>
              </li>
              <li class="header__sm-menu-link">
                <a href="home.html" class="btn btn-info">Logout</a>
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
        <h1>DONATE</h1>
      </div>
     
    

         
                
<?php
    include 'check.php';

    if (isset($_POST["submit"])) {

    $ename=$_POST["ename"];
    $eamount=$_POST["amount"];
    
    if($eamount==""){
      echo "<script>alert('please fill amount...!!');</script>";
  }else{   


    $del = "DELETE FROM requirements where amount < 0";
    $result = mysqli_query($conn, $del);

$update= "update requirements set amount = (amount - '$eamount') where name like '$ename' ";



if(mysqli_query($conn,$update)){

    echo "<script>alert('Amount donated Successfully ...!!');</script>";
}
else{
    echo "Error: " . $update . "<br>" . mysqli_error($conn);
  }


}
}
 


// here we are maintaining the donor history of transaction.
// Check connection

    if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $ename=$_POST["ename"];
    $eamount=$_POST["amount"];
    
    if($eamount==""){
      echo "<script>alert('please fill amount...!!');</script>";
  }else{   

$insert = "insert into his values('$username','$ename','$eamount')";

if(mysqli_query($conn,$insert)){
    echo '<script type = "text/javascript">';
    echo 'window.location.href = "Donor_AllRequirements.php"';
    echo '</script>';
}
else{
    echo "Error: " . $insert . "<br>" . mysqli_error($conn);
  }


}
}


?>
               
             
              


<form class="box" method="POST" >
   
    
    
    <div class="row g-3">
        
        <div class="col">
        <input type="text" placeholder="Enter your username" name="username" class="input1" id="username"/>
        <input type="text" placeholder="Name NGO name" name="ename" class="input1" id="ename"/>
        <input type="number" placeholder="Amount" name="amount" class="input1" id="amount"/>
            
        </div>
        
    </div>
    
    <div class="row g-3">
        <div class="col">
            <button type="submit" name="submit" class="input1">Donate</button>
            
        </div>
    </div>
       
</form>


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
                            <li><a href="Donor_feedback.php">feedback</a></li>
                            <li><a href="Reg_Login.html">logout</a></li>
                            
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

</body>
</html>