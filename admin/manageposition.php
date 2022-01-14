<html>
<center>
<div id="bg">
<font size="6">
<head><u>ADMINISTRATION CONTROL PANEL</u></head></font>
<link rel="stylesheet" style="text/css" href="style.css">
<body>
<div id="head">
<p></p>
<font size="4">
<a href="admincontrol.html">HOME</a> |<a href="manageposition.php">MANAGE POSITION</a> |<a href="managecandidate.php">MANAGE CANDIDATE</a> |<a href="managevoters.php">MANAGE VOTERS</a>|<a href="pollresult.php">POLL RESULT</a> |<a href="manageaccount.php">MANAGE ACCOUNT</a> |<a href="changepassword.php">CHANGE PASSWORD</a> |<a href="logout.php">LOGOUT</a>
</div>
<p></p>
<p><u><b><font size=4>ADD NEW POSITION</font></b></u></p>
<div id="body">
<form  type="form3" method="POST" action="add.php" onSubmit=return>
<?php 
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"add=success")==true)
{
	echo "<p id=sucu>position added sucessfully</p>";
}else if(strpos($fullurl,"add=failed")==true){
	echo "<p id=error>position is not added!</p>";
}else if(strpos($fullurl,"add=fail")==true){
echo "<p id=error>position already exists!</p>";}
	?>
<p>POSITION NAME:
<input type="text" name="pos"  value="" required>
<button type="submit"  onclick="alert('ok to add')">ADD</button>
</p>
</form>
</div>
</body>
</div>
</center>
</html>