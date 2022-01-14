<?php
session_start();
require('connection.php');
$pos=$_POST['pos'];
$q1=mysqli_query($con,"select * from `tbposition` where position_name='$pos' ");
while($row=mysqli_fetch_array($q1,MYSQLI_ASSOC)){
	$h=$row['position_name'];
}
if($h==$pos){
	header("location:manageposition.php?add=fail");
}else{
$q=mysqli_query($con,"select * from `tbpostion` where position_name='$pos' ");
while($row=mysqli_fetch_array($q,MYSQLI_ASSOC)){
if(strpos($pos,$row['position_name'])==true){
	header("location:manageposition.php?add=fail");
	break;
}
}
$sel=mysqli_query($con,"INSERT INTO `tbposition` ( `position_name`) VALUES ( '$pos')");
if($sel==1)
{
header("location:manageposition.php?add=success");
}
else
{
header("location:manageposition.php?add=failed");
}
}
?>