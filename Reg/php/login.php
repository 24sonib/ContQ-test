<?php
require 'db.php';
session_start();
$sql = "SELECT id FROM signup WHERE EmailID = '$email' and Password = '$passwd'";
 $result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

 if($count == 1) {
         $_SESSION['login_user'] = $email;

         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
	echo "<div>$error </div>";
	}
?>
