<?php
require 'conn.php';
global $conn;

$uname=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$feedback=$_POST['message'];

if(isset($_POST['submit'])){
$query= "INSERT INTO `feedback` (`email`, `name`, `phone`, `feedback`) VALUES ( '$uname', '$email', '$phone', '$feedback');";
$runquery = mysqli_query($conn , $query);
header('location:3dos.html');
}
else echo"not working";


?>