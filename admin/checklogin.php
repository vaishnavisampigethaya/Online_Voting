<?php 
session_start();
require('connection.php');
if(isset($_POST['submit'])){
if(empty($_POST['email']) || empty($_POST['password'])){
 echo "<script>alert('Username or password is Invalid')</script>";
}
else{
$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['email']=$email;
$sel=mysqli_query($con,"SELECT *FROM `tbadministrators` WHERE email='$email' and password='$password' ");
$query=mysqli_fetch_array($sel);
if($query){
session_start();
header("location:admincontrol.html?login=success");
}else{
header("location:admin.php?login=failed");
}
}
}
?>
