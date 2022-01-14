<html>
<center>
<div id="bg">
<head><font size="6"><u>STUDENT HOME</font></u></head>
<link rel="stylesheet" style="text/css" href="style.css">
<br></br>
<font size="4">
<div id="head">
<body >
<a href="home.php">HOME </a> | <a href="current_polls.php">CURRENT POLLS </a> | <a href="manage_my_profile.php">MANAGE MY PROFILE </a> | <a href="change_password.php">CHANGE PASSWORD </a> | <a href="logout.php">LOGOUT </a></font>
</div>
<p>
<font size="6">
<head><u>CURRENT POLLS</u></head></font></p>
<body>
<div id="body">
<?php 
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"pol=su")==true)
{
	echo "<p id=sucu>Voted successfully</p>";
}else if(strpos($fullurl,"pol=er")==true)
{
echo "<p id=error>You have already voted for this position!!</p>";}
?>
<form type="form3" method="post"  action="current_polls.php" onSubmit="return">
<p>CHOOSE POSITION:
<?php 
session_start();
require('connection.php');
$position=mysqli_query($con,"CALL `getposition`()");
echo "<select name='pos'>";
while($row=mysqli_fetch_array($position,MYSQLI_ASSOC)) {
echo "<option>";
echo $row['position_name'];
echo "\n</option>";
}
echo "</select>";
?>
<button  type="submit" name="seeres" onclick="alert('press ok to see candidate')">See Candidates</button></p>

	<?php
require('connection.php');
if(isset($_POST['seeres'])){ 
$f1='';
$f2='';
$pos=mysqli_query($con,"SELECT * FROM `tbposition`");
while( $row=mysqli_fetch_array($pos)){
$cpos=$_POST['pos'];
}
$e=mysqli_query($con,"SELECT * FROM `tbvoters` where email='$_SESSION[email]' ");
while($row=mysqli_fetch_array($e,MYSQLI_ASSOC)){
$f2=$row['id'];
}
$h=mysqli_query($con,"SELECT * FROM `tbvotes` where position='$cpos' and voter_id='$f2' ");
while($row=mysqli_fetch_array($h,MYSQLI_ASSOC)){
	$f1=$row['voter_id'];
}
if($h&&$e){
if(($f1)==($f2)){
	header("location:current_polls.php?pol=er");
}else{

$sel=mysqli_query($con,"SELECT * FROM `tbcandidates` WHERE candidate_position='$cpos' ");
while($row=mysqli_fetch_array($sel,MYSQLI_ASSOC)){
	echo "<p>";
echo $row['candidate_id'];
echo ".";
echo "\t";
 echo "<td>".$row['candidate_name'].":</td>";  
 echo "<td><input type='radio' value='$row[candidate_name]' name='vote' onclick='gettvote()' /></td>"; 
 echo "\n"; echo "</p>";
}
 echo "<td><input type='submit' value='submit' name='submit' onclick='alert('click ok to submit')' /></td>"; 
}
}
}
if(isset($_POST['submit'])){
	if(isset($_POST['vote'])){
		$vote=$_POST['vote'];
	$q1=mysqli_query($con,"select * from `tbvoters` where email='$_SESSION[email]' ");
	while($row=mysqli_fetch_array($q1,MYSQLI_ASSOC)){
		$h2=$row['id'];
	}
	$q=mysqli_query($con,"select * from `tbcandidates` where candidate_name='$vote' ");
	while($row=mysqli_fetch_array($q,MYSQLI_ASSOC)){
		$h=$row['candidate_cvotes'];
		$h1=$row['candidate_name'];
		$h3=$row['candidate_position'];
	}
	$h++;
$e=	mysqli_query($con,"update `tbcandidates` set candidate_cvotes='$h' where candidate_name='$h1' and candidate_position='$h3'");
$r=	mysqli_query($con,"insert into `tbvotes` (`sl_no`,`voter_id`,`position`,`status`) values('','$h2','$h3',1) ");
	header("location:current_polls.php?pol=su");
	}
}
?>
</div>
</div>
</body>
</center>
</html>


