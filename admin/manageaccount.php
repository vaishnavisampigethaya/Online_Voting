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
<a href="admincontrol.html">HOME</a> |<a href="manageposition.php">MANAGE POSITION</a>|<a href="managecandidate.php">MANAGE CANDIDATE</a>|<a href="managevoters.php">MANAGE VOTERS</a> |<a href="pollresult.php">POLL RESULT</a>|<a href="manageaccount.php">MANAGE ACCOUNT</a>|<a href="changepassword.php">CHANGE PASSWORD</a>|<a href="logout.php">LOGOUT</a></font>
</div>
<p></p>
<h3><b><u><font size=4>UPDATE ACCOUNT</font></u></b></h3>
<div id="body">
<?php 
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"update=success")==true)
{
	echo "<font color=green><p id=sucu>details updated sucessfully</p></font>";
}else if(strpos($fullurl,"update=failed")==true){
	echo "<p id=error>details is not updated</p>";
}?>
<form type="form3" method="POST"  action="update.php"  onSubmit=return>
<p>
<tr>FIRST NAME:</tr>
<input type="text" name="first_name"  value="" required>
</p>
<p>
<tr>LAST NAME:</tr>
<input type="text"  name="last_name" value="" required>
</p>
<p>
<tr>EMAIL ADDRESS:</tr>
<input type="text" name="email" value="">
</p>
<button type="submit" onClick="alert('click ok to update the details')">UPDATE</button>
</form>
</div>
</center>
</div>
</body>
</html>