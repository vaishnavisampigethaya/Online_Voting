<html>
<center>
<div id="bg">
<head><font size="6"><u>STUDENT HOME</font></u></head>
<link rel="stylesheet" style="text/css" href="style.css">
<font size="4">
<br></br>
<div id="head">
<body>
<a href="home.php">HOME </a> | <a href="current_polls.php">CURRENT POLLS </a> | <a href="manage_my_profile.php">MANAGE MY PROFILE </a> | <a href="change_password.php">CHANGE PASSWORD</a> | <a href="logout.php">LOGOUT </a></font>
</div>
<p><u><font size=6>UPDATE PROFILE</font></u></p>
<form type="form3" method="POST" action="update.php"  onSubmit=return>
<div id="body">
<?php 
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"update=sucess")==true)
{
	echo "<p id=sucu>updated sucessfully</p>";
}else if(strpos($fullurl,"update=failed")==true){
	echo "<p id=error>update failed</p>";
}?>
<p>FIRST NAME:
<input type="text" name="first_name" value=""></p>
<p>LAST NAME:
<input type="text" name="last_name" value=""></p>
<p>EMAIL:
<input tupe="text" name="email" value=""></p>
<button type="submit"  onClick="alert('click ok to update profile')">UPDATE PROFILE</button>
</div>
</form>
</body>
</div>
</html>

