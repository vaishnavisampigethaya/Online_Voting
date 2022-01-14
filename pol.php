<?php
session_start();
require('connection.php');
$pos=mysqli_query($con,"SELECT * FROM  tbcandidate");
while($col=mysqli_fetch_array($pos,MYSQLI_ASSOC)){
$cpos=$_POST['pos'];
}
echo $cpos;
$position=mysqli_query($con,"SELECT * FROM  tbcandidate WHERE candidate_position='$cpos' ");
while($col=mysqli_fetch_array($position,MYSQLI_ASSOC)){
echo $col['candidate_id'];
echo $col['candidate_name'];
}
?>
