<?php
include("checklogin.php");
?>
<html>
<div id="bg">
<div id="head"><marquee behaviour="right"><font size="12">ONLINE VOTING SYSTEM</font></marquee><right></div>
<div id="nav"><a href="admin/admin.php">Admin Login</a>  <a href="login.php">User Login</a></right></div>
<head><b><center><font size="6" color="blue"><u>LOGIN PAGE</u></font></center></b></head>
<link rel="stylesheet" style="text/css" href="style1.css">
<p></p>
<div id="body">
<body>
<center>
<?php 
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"login=succes")==true){
	echo "<p id=error>login sucessfull</p>";
}
elseif(strpos($fullurl,"login=failed")==true){
	echo "<p id=error>invalid email or password</p>";
}?><b>
<form name="form2" method="post" action="checklogin.php">
<p></p>
<p>
<tr><b>EMAIL:</b>
<input id="emailid" type="text" name="email" value=""  required></tr>
</p>
<p>
<tr><b>PASSWORD:</b>
<input type="password" name="password" value="" id="pass"  required></tr>
</p>
<tr>
<button type="submit" id="demo" name="submit"  onclick="alert('click ok to submit')">SUBMIT</button></tr>
<p></p>
<br><b>Not yet registered? <a href="register.php"><b>Register Here</b></a></br></b>
</form>
</b>
</center>
</body>
</div>
</div>
<center><div id="footer1"><head>@COPY RIGHT 2019</head></center></div>
</html>



