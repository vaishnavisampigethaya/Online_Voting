<?php
session_start();
require('connection.php');
$pos=mysqli_query($con,"SELECT * FROM `tbposition`");
while( $row=mysqli_fetch_array($pos)){
$cpos=$_POST['pos'];
}
$sel=mysqli_query($con,"SELECT * FROM `tbcandidates` WHERE candidate_position='$cpos' ");
while($row=mysqli_fetch_array($sel,MYSQLI_ASSOC)){
echo $row['candidate_name'];
echo ":";
echo $row['candidate_cvotes'];
echo "\n";
}
?>
