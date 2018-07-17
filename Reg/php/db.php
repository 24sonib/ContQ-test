<?php
require 'Signup_var.php';
$ser = 'localhost';
$user = 'root';
$pass = 'redhat';
$dbname = 'docker';

$conn = mysqli_connect($ser, $user, $pass, $dbname);

if (!$conn)
{
die('conn failed' . mysql_error());
}
echo '<h1 style="color: white"> Connection Success </h1>';
?>

