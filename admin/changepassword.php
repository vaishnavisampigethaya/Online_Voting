<html>
<center>
<div id="bg">
<font size="6">
<head><u>MANAGE ADMINISTRATION</u></head></font>
<link rel="stylesheet" style="text/css" href="style.css">
<body>
<p></p>
<div id="head">
<font size="4">
<a href="admincontrol.html">HOME</a> |<a href="manageposition.php">MANAGE POSITION</a>|<a href="managecandidate.php">MANAGE CANDIDATE</a>|<a href="managevoters.php">MANAGE VOTERS</a>|<a href="pollresult.php">POLL RESULT</a>|<a href="manageaccount.php">MANAGE ACCOUNT</a>|<a href="changepassword.php">CHANGE PASSWORD</a>|<a href="logout.php">LOGOUT</a></font>
</div>
<p></p>
<P><u><b><font size=4>CHANGE PASSWORD</font></b></u></P>
<div id="body">
<?php 
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"password=suc")==true){
	echo "<font color=green><p>password updated successfully</p></font>";
}
elseif(strpos($fullurl,"password=failed")==true){
	echo "<p id=error>password not updated.</p>";
}
else if(strpos($fullurl,"password=re")==true){
		echo "<p id=error>new password mismatched! </p>";
}else if(strpos($fullurl,"password=re1")==true){
echo "<p id=error>old password wrong! </p>";
}?>
<form type="form3" method="POST"  action="password.php"  onSubmit=return>
<p>OLD PASSWORD:
<input type="password" name="password" value="" required>
</p>
<p>NEW PASSWORD:
<input type="password" name="pass" value="" required>
</p>
<p>CONFIRM PASSWORD:
<input type="password" name="pass1" value="" required>
</p>
<button type="submit" onClick="alert(' click ok to update the datails')">UPDATE</button>
</div>
</form>
</div>
</center>
</body>
</html>