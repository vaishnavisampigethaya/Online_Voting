<?php
session_start();
require('connection.php');
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$sel=mysqli_query($con,"UPDATE tbadministrators SET first_name='$first_name',last_name='$last_name',email='$email' WHERE email='$_SESSION[email]' ");
if($sel==1)
{
header("location:manageaccount.php?update=success");
}
else
{
header("location:manageaccount.php?update=failed");
}
?>

