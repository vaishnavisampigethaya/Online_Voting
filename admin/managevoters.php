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
<p><u><b><font size=4>MANAGE VOTERS</font></b></u></p>
<body>
<link rel="stylesheet" style="text/css" href="style.css">
<table border=1 width=50  height=50 align="center" ><tr>
<th>MEMEBER_ID</th>
<th>FIRST_NAME</th>
<th>LAST_NAME</th>
<th>EMAIL</th>
<th>DECISION</th></tr>
<?php 
require('connection.php');
echo "<p>";
echo "\n";
$sel=mysqli_query($con,"SELECT * FROM `tbmembers`  ");
while($row=mysqli_fetch_array($sel,MYSQLI_ASSOC)){ ?>
<p><?php
echo "<tr>";
echo  "<td>" .$row['member_id']."</td>";
 echo "<td>". $row['first_name']."</td>";  
 echo "<td>". $row['last_name']."</td>";
 echo "<td>". $row['email']."</td>";
 echo "\n";
 echo '<td><a href="managevoters.php?id=' . $row['member_id'] . '">Reject Voters </a></td>';
 echo '<td><a href="managevoters.php?id2=' . $row['member_id'] . '">Accept Voters </a></td>';
  echo "\n"; 
 echo "</p>";
 echo "</tr>";
}?>
<?php
// deleting sql query
// check if the 'id' variable is set in URL
 if (isset($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 // delete the entry
 $result = mysqli_query($con, "DELETE FROM tbmembers WHERE member_id='$id'");
 
 // redirect back to candidates
 header("Location:managevoters.php");
 }
 else{
	 if(isset($_GET['id2'])){
	 $id2=$_GET['id2'];
	 $res=mysqli_query($con,"select * from tbmembers where member_id='$id2' " );
	 while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
		 $h1=$row['member_id'];
		 $h2=$row['first_name'];
		 $h3=$row['last_name'];
		 $h4=$row['email'];
		 $h5=$row['password'];
	 }
	 $result = mysqli_query($con, "DELETE FROM tbmembers WHERE member_id='$id2'");
	 mysqli_query($con," insert into `tbvoters` (`id`,`first_name`,`last_name`,`email`,`password`) values('$h1','$h2','$h3','$h4','$h5') ");
	 header("Location:managevoters.php");
 }
 }
 // do nothing   
?>
</div>
 </table>
 </body>
 </center>
 </html>