<?php 
// For Remote database connection

$servername = "remotemysql.com";
$username = "hcOJV17RPg";
$password = "W9ZFWj4NFD";

// For local database connection

// $servername = "localhost";
// $username = "root";
// $password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn) { 
    // mysqli_select_db($conn,"charityconnect");
    mysqli_select_db($conn,"hcOJV17RPg");
}else{
    die("Connection failed: " . mysqli_connect_error());
}

?>