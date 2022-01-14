<html>
<center>
<div id="bg">
<head><font size="6"><u>STUDENT HOME</u></font></head>
<link rel="stylesheet" style="text/css" href="style.css">
<br></br>
<div id="head">
<body>
<font size="4">
<a href="home.php">HOME</a> | <a href="current_polls.php">CURRENT POLLS</a> | <a href="manage_my_profile.php">MANAGE MY PROFILE</a> | <a href="change_password.php">CHANGE PASSWORD</a>| <a href="logout.php">LOGOUT</a></font>
</div></body>
<p></p>
<p><font size=6><u>CHANGE PASSWORD</u></font></p>
<body>
<div id="body">
<?php 
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"password=success")==true)
{
	echo "<p id=sucu>updated sucessfully</p>";
}else if(strpos($fullurl,"password=failed")==true){
	echo "<p id=error>update failed</p>";
}else if(strpos($fullurl,"password=re")==true){
		echo "<p id=error>new password mismatched! </p>";
}
?>
<form type="form4" method="POST" action="password.php" onSubmit=return>
<p>OLD PASSWORD:
<input type="password" name="password" value="" required>
</p>
<p>NEW PASSWORD:
<input type="password" name="pass" value="" required>
</p>
<p>CONFIRM PASSWORD:
<input type="password" name="pass1" value="" required></p><p>
<button type="submit" onClick="alert('details updated')">UPDATE</button></p>
</form>
</div>
</center>
</body>
</div>
</html>