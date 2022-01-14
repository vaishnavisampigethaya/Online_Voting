<html>
<center>
<div id="bg">
<font size="15">
<head><u><font color="white">REGISTER FOR VOTING</font></u></head><p></p>
<link rel="stylesheet" style="text/css" href="style1.css">
</font>
<body>
<div id="body">
<?php 
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"reg=fail")==true)
{
	echo "<font color='green'><p id=error>password mismatched!</p></font>";
}else if(strpos($fullurl,"reg=success")==true){
	echo "<font color=green><p id=sucu>You are sucessfully registered.Now login</p></font>";
}
?>
<form  name="form1"  method="POST"  action="signup.php"  onSubmit=return>
<p>FIRST NAME:
<input  type="text"  name="firstname"  value=""   s required></p>
<p>LAST NAME:
<input  type="text"   name="lastname"  value=""    required></p>
<p>E-MAIL ID:
<input type="text" name="email" value=""  required></p>
<p>PASSWORD:
<input  type="password"  name="password"   value=""  required></p>
<p>CONFIRM PASSWORD:
<input type="password"  name="cpassword"  value=""  required></p>
<p></p>
<tr>
<button  type="submit">SUBMIT</button></tr>
<p></p>
<P>Already have an account?</P><a href="login.php"><p>Login Here</p>
</div>
</form>
</body>
</div>
</center>
<html>
