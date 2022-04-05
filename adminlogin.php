<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Sign Up</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <script defers src="adminlogin.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
<style>
    .contain{
    width: 100%;
    height: 40vh;
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

    .box{
    width: 100%;
    padding: 40px;
    background-color: rgb(19, 52, 53);
    
    border-radius: 12px;
}

.box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
    margin-bottom: 22px;
    margin-left: 42%;
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
width: 50%;
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

<?php

include 'check.php';

if(isset($_POST["submit"])){

	$user=strval($_POST["User"]);
	$pass=strval($_POST["pass"]);
    
	$query= "select * from admins where username = '$user' and password='$pass'";
	$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
	$count = mysqli_num_rows($data);
	if ($count<=0){
		echo "<script>alert('Wrong login or password');</script>";
		
	}else{
		$_SESSION["user"]=$user;
		echo '<script>alert("You are Logged In")</script>';
		header("Location: admin_dashboard.php");
	}
	}

?>
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
                <a href="index.php" class="header__link"> Home </a>
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
                <a href="index.php"> Home </a>
              </li>
            </ul>
          </div>
        </div>
      </header>


<div>

    <form class="box" method="POST" >
        
        <h1 style="margin-top: 12%;">Admin Login</h1>
        <div class="row g-3">
            
            <div class="col">
                
                <input type="text" name="User" id="User"  class="input1" placeholder="Username" required>
            </div>
            
        </div>
        
        <div class="row g-3">
            <div class="col">
                
                <input type="password" name="pass" id="pass"  class="input1" placeholder="password" required>
            </div>
        </div>
        <input class="input1" type="submit" name="submit"  value="Login">  
        <button class="input1" onclick="window.location.href='Reg_Login.html'" type="submit" name="">Cancel</button>   
    </form>  
    </form>
    
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
                                <li><a href="index.php">Home</a></li>
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