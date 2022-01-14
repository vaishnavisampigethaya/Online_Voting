<?php
session_start();
require('connection.php');
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
echo "$last_name";
$sel=mysqli_query($con,"UPDATE tbvoters SET first_name='$first_name',last_name='$last_name',email='$email' WHERE email='$_SESSION[email]' ");
if($sel==1)
{
header("location:manage_my_profile.php?update=sucess");
}
else
{
header("location:manage_my_profile.php?update=failed");
}
?>

