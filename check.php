<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn) { 
    mysqli_select_db($conn,"charityconnect");
}else{
    die("Connection failed: " . mysqli_connect_error());
}

// if($last_insert_id) {
//       $query = "select `encoded_image` from `images` where `id`= ". $last_insert_id;
//       $result = mysqli_query($con, $query);
//       if(mysqli_num_rows($result) == 1) {
//         $row = mysqli_fetch_object($result);
//         echo "<br><br>";
//         echo '<img src="'.$row->encoded_image.'" width="250">';
//       }
//     }
?>