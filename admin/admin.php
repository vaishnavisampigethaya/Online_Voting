<?php
include("checklogin.php");
?>
<html>
<div id="bg">
<div id="head"><marquee behaviour="right"><font size="12">ONLINE VOTING SYSTEM</font></marquee></div>
<div id="nav"><a href="admin.php">Admin Login</a>  <a href="../login.php">User Login</a></div>
<font size="6"  color="blue">
<head><b><center><u>ADMIN LOGIN</u></center></b></head></font>
<link rel="stylesheet" style="text/css" href="style1.css">
<p></p>
<div id="body">
<body>
<center>
<?php 
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"login=success")==true)
{
	echo "<font color=green><p id=sucu>login success</p></font>";
}else if(strpos($fullurl,"login=failed")==true){
	echo "<p id=error>Invalid username and password</p>";
}?><b>
<form name="form3" method="post"  action="checklogin.php"  onSubmit="return">
<p>
<tr>EMAIL:
<input type="text"    name="email"  value="" required></tr>
</p><p></p>
<p>
<tr>PASSWORD:
<input type="password"   name="password"  value=""  required></tr>
</p><p></p>
<tr><button  type="submit" name="submit"  onclick="alert('click ok to submit')">SUBMIT</button></tr>
<p></p>
</form>
</b>
</center>
</body>
</div>
</div>
<center><div id="footer1"><head>@COPY RIGHT 2019</head></center></div>
</html>
