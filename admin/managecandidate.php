<html>
<center>
<div id="bg">
<font size="6">
<head><u>ADMINISTRATION CONTROL PANEL</u></head></font>
<link rel="stylesheet" style="text/css" href="style.css">
<body>
<p></p>
<div id="head">
<font size="4">
<a href="admincontrol.html">HOME</a> |<a href="manageposition.php">MANAGE POSITION</a>|<a href="managecandidate.php">MANAGE CANDIDATE</a>|<a href="managevoters.php">MANAGE VOTERS</a>|<a href="pollresult.php">POLL RESULT</a>|<a href="manageaccount.php">MANAGE ACCOUNT</a>|<a href="changepassword.php">CHANGE PASSWORD</a>|<a href="logout.php">LOGOUT</a></font>
</div>
<p></p>
<p><b><u><font size=4>ADD NEW CANDIDATE:</font></u></b></p>
<div id="body">
<?php 
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"addcan=success")==true)
{
	echo "<p id=sucu>candidate added sucessfully</p>";
}else if(strpos($fullurl,"addcan=failed")==true){
	echo "<p id=error>candidate is not added</p>";
}?>
<form  type="form3" method="POST" action="addcan.php" onSubmit=return>
<p>CANDIDATE NAME:
<input type="text"  name="candidate" value="" required>
<p>CANDIDATE POSITION:
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
<button type="submit" name="$row['candidate_name']" onclick="alert('ok to add')">ADD</button>
<table border=1 width=50  height=50 align="center" ><tr>
<th>CANDIDATE_ID</th>
<th>CANDIDATE_NAME</th>
<th>CANDIDATE_POSITION</th>
<th>DELETE</th></tr>
<?php 
require('connection.php');
echo "<p>";
echo "\n";
$sel=mysqli_query($con,"SELECT * FROM `tbcandidates`  ");
while($row=mysqli_fetch_array($sel,MYSQLI_ASSOC)){ ?>
<p><?php
echo "<tr>";
echo  "<td>" .$row['candidate_id']."</td>";
 echo "<td>". $row['candidate_name']."</td>";  
 echo "<td>". $row['candidate_position']."</td>";
 echo "\n";
 echo '<td><a href="managecandidate.php?id=' . $row['candidate_id'] . '">Delete Candidate</a></td>';
  echo "\n"; 
 echo "</p>";
 echo "</tr>";
}
?>
 </table>
<?php
// deleting sql query
// check if the 'id' variable is set in URL
 if (isset($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysqli_query($con, "DELETE FROM tbCandidates WHERE candidate_id='$id'");
 
 // redirect back to candidates
 header("Location:managecandidate.php");
 }
 else{}
 // do nothing   
?>
</p>
</button>
</div>
</body>
</div>
</center>
</html>