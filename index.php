<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="i2.jpg">
<div id="full">
	<div id="inner-full">
<center>
	<div id="header"><h2>Blood Bank Management System</h2></div>
	<div id="body">
	<br><br><br><br><br>
	<form action="" method="post">
	<table align="centre">
	  <tr>
		<td width="120px" height="70px"><b>Enter Username</b></td>
		<td width="200px" height="70px"><input type="text" name="un" placeholder="Enter Username" style="width:180px;height:30px;border-radius:10px;"></td>
	</tr>
	 <tr>
		<td width="120px" height="70px"><b>Enter Password</b></td>
		<td width="200px" height="70px"><input type="text" name="ps" placeholder="Enter Password" style="width:180px;height:30px;border-radius:10px;"></td>
	</tr>
	<tr>
		<td><input type="submit" name="sub" value="Login" style="width:100px;height:30px;border-radius:10px;"></td>

	</tr>
	</table>
</center>
	</form>
	<?php
	if(isset($_POST['sub']))
	{
	 $un=$_POST['un'];	
	 $ps=$_POST['ps'];
	 $newpass=md5('$ps');
	$q=mysqli_query($con,"SELECT *FROM `tbmembers` WHERE email='$un' and password='$newpass'");
   $querry=mysqli_fetch_array($q);
	if($querry)
	{
		header("Location:home.php");
	}
	else
	{
		echo "<script>alert('Wrong User');</script>";
	}
	}
	?>
	
	

	 </div>
	<div id="footer"><h4 align="center">Copyright@myprojecthd</h4></div>
</div>
</div>
	
</body>
</html>