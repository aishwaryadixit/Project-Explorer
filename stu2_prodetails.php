<?php
require_once('master.inc.php');
?>
<head>
	<style>
		table th,td{
			border:solid black;
			color:white;
			padding:10px;
			border-collapse:collapse;
			background-color:black;
			text-align:center;
			}
		.button{
			background-color: #115DD1;
			color: white;
			padding: 15px 32px;
			text-align: center;
			width: 30%;
			font-size: 20;
			}
			</style>
			</head>
<body><center>
	<h1>JOB DETAILS</h1>


<?php

function prodetails($id)
{
	$conn=mysql_connect('localhost','root','@idx');
	mysql_select_db('pl');

	
	$q="SELECT `description`,`lang`,`skills`,`date` FROM `project` where `projid`='$id'";
	$result=mysql_query($q,$conn);
	
	if($result)
	{	
		echo '<table>';
			
			$desc=mysql_result($result,0,'description');	echo '<tr><td>'.$desc.'</td>';			
			$lang=mysql_result($result,0,'lang'); echo '<td>'.$lang.'</td>';
			$skills=mysql_result($result,0,'skills');echo '<td>'.$skills.'</td>';
			$date=mysql_result($result,0,'date');echo '<td>'.$date.'</td>';
			echo '</tr>';

		echo '</table><br><br>';
	}
	

	else
	echo 'There was problem in connecting with the server';
}

if(isset($_POST['view'])){
	global $id;
	$id=$_POST['view'];
	prodetails($id);
	}
	
echo 'id is'.$id;

echo '<form action="uploadlink.php" method="POST"><input type=text name="address"><br><br>
<button type=submit name="link" value="'.htmlspecialchars($id).'" ;>UPLOAD LINK</button><br><br></form>';


?>
