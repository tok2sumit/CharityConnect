<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Sign Up</title>

    <link rel="stylesheet" href="css/bootstrap.css">
   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <style>
            
    body{
    margin: 0%;
    padding: 0%;
    background-color: rgb(9, 87, 87);
}
   .box{
    margin-top: 22%;
    width: 100%;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%); 
    background-color: rgb(19, 52, 53);
    text-align: center;
    border-radius: 12px;
}


.box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
    margin-bottom: 32px;
    
}

.input1{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid rgb(100, 157, 231);
    padding: 14px 10px;
    width: 280px;
    outline: none;
    color: white;
    border-radius: 20px;
    transition: 0.5s;
}


.input1:focus{
width: 320px;
border-color: rgb(191, 223, 132);  
}

.input1[type="submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid rgb(191, 223, 132);
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.5s;
    width: 180px;
}

.input1[type="submit"]:hover{
background-color: yellowgreen;
}

.Cancel{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid rgb(191, 223, 132);
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.5s;
    width: 180px;
}

.Cancel:hover{
background-color: yellowgreen;
}
.forprofile{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid rgb(100, 157, 231);
    padding: 14px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 20px;
    transition: 0.5s;
}
    </style>
</head>
<body>

<?php
include 'check.php';
if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm=$_POST["firstname"];
    $lnm=$_POST["lastname"];
    $mail=$_POST["email"];
    $unm=$_POST["username"];
    $pass=strval($_POST["password"]);
    $repass=strval($_POST["confermpassword"]);
    $phone=$_POST["mobileno"];
    $addr=$_POST["address"];

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $select = "SELECT * FROM NGOs WHERE email = '$mail'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
      echo '<script type  = "text/javascript">';
      echo 'alert("Email Already Taken!");';
      echo 'window.location.href = "NGOsignup.php"';
      echo '</script>';
    }else{
      $register = "INSERT INTO NGOs (filename,images,firstname,lastname,email,username,password,confermpassword,mobileno,address, status) VALUES ('$_POST[fname]','$dst_db','$fnm','$lnm','$mail','$unm','$pass','$repass','$phone','$addr', 'pending')";
      mysqli_query($conn, $register);
      echo '<script type  = "text/javascript">';
      echo 'alert("Your account is now pending for approval!");';
      echo 'window.location.href = "NGOlogin.php"';
      echo '</script>';
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
                <a href="home.html" class="header__link"> Home </a>
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
                <a href="home.html"> Home </a>
              </li>
            </ul>
          </div>
        </div>
    </header>

<form method="post" class="box" enctype="multipart/form-data">
<h1 class="text-center">NGO Registeration</h1>
      <input type="text" name="fname" class="input1" placeholder="Enter Name" Required>
      <label for="image" style="color: white;">Upload Document</label>
      <input type="file" class="input1" name="image" Required>
      <input type="text" name="firstname" id="firstname" class="input1" placeholder="First Name" required>
      <input type="text" name="lastname" id="lastname" class="input1" placeholder="Last Name" required>
      <input type="email" name="email" id="email" class="input1" placeholder="E-mail" required>
      <input type="text" name="username" id="username" class="input1" placeholder="Username" required>
      <input type="number" name="password" id="password" class="input1" placeholder="password" required>
      <input type="number" name="confermpassword" id="confermpassword" class="input1" placeholder="Conferm-password" required>
      <input type="number" name="mobileno" id="mobileno" class="input1" placeholder="Mobile no" required>
      <input type="text" name="address" id="address" class="input1" placeholder="Address" required>
      <input type="submit" name="submit" class="input1" value="Register">
      <label style="color: white;"> Already Registered....!!</label>
      <button onclick="window.location.href='NGOlogin.php'" class="Cancel">Login</button>
    
</form>


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