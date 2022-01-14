<html>
<center>
<div id="bg">
<font size="6"><head><u>ADMINISTRATION CONTROL PANEL</u></head></font>
<link rel="stylesheet" style="text/css" href="style.css">
<body>
<div id="head">
<p></p>
<font size="4">
<a href="admincontrol.html">HOME</a> | <a href="manageposition.php">MANAGE POSITION</a> | <a href="managecandidate.php">MANAGE CANDIDATE</a> | <a href="managevoters.php">MANAGE VOTERS</a>|<a href="pollresult.php">POLL RESULT</a>|<a href="manageaccount.php">MANAGE ACCOUNT</a>|<a href="changepassword.php">CHANGE PASSWORD</a>|<a href="logout.php">LOGOUT</a>
</div>
<p></p>
<form name="form3" method="POST"  action="pollresult.php" onSubmit="return res()">
<p><b><u><font size=4>CHOOSE POSITION:</font></b></u>
<div id="body">
<table width="100" height="50"  length="100">
<?php
session_start();
require('connection.php');
$position=mysqli_query($con,"SELECT * FROM tbposition");
echo "<select name='pos'>";
while($row=mysqli_fetch_array($position,MYSQLI_ASSOC)) {
echo "<option>";
echo $row['position_name'];
echo "\n</option>";
}
echo "</select>";
?>
<button type="submit"  name="see">SEE RESULT</button></p>
<tr>
	<?php
require('connection.php');
if(isset($_POST['see'])){ 
echo "<table width=50 height=50 border=1>";
echo "<th>CANDIDATE_ID</th>";
echo "<th>CANDIDATE NAME</th>";
echo "<th>VOTE COUNTS</th></tr>";
$pos=mysqli_query($con,"SELECT * FROM `tbposition`");
while( $row=mysqli_fetch_array($pos)){
$cpos=$_POST['pos'];
}
$sel=mysqli_query($con,"SELECT * FROM `tbcandidates` WHERE candidate_position='$cpos' ");
while($row=mysqli_fetch_array($sel,MYSQLI_ASSOC)){ ?>
<p><?php
echo "<tr>";
echo "<td>".$row['candidate_id']."</td>";
 echo "<td>".$row['candidate_name']."</td>";  
 echo "<td>".$row['candidate_cvotes']."</td>";
echo "</tr>"; 
 echo "\n"; 
}
}
?></p></table>

</form>
</table>
</div>
</font>
</body>
</div>
</center>
</html>



