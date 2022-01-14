<?php 
require('connection.php');
session_start();
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['email']=$email;
$newpas=md5($password);
$sel=mysqli_query($con,"SELECT *FROM `tbvoters` WHERE email='$email' and password='$newpas' ");
$query=mysqli_fetch_array($sel);
if($query){
header("location:home.php?login=succes");
}else{
header("location:login.php?login=failed");
}
}
?>
