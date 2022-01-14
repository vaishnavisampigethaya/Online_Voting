<?php
session_start();
require('connection.php');
$cname=$_POST['candidate'];
$pos=mysqli_query($con,"SELECT * FROM `tbposition`");
while( $row=mysqli_fetch_array($pos)){
$cpos=$_POST['pos'];
}
$sel=mysqli_query($con,"INSERT INTO `tbcandidates` (`candidate_name`, `candidate_position`) VALUES ('$cname', '$cpos')");
if($sel==1)
{
header("location:managecandidate.php?addcan=success");
}
else{
header("location:managecandidate.php?addcan=failed");
}
?>