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
			</style>
			</head>
<body><center>
	<h1>JOB DETAILS</h1>


<?php

function prodetails($id)
{
	$conn=mysql_connect('localhost','root','@idx');
	mysql_select_db('pl');

	echo $id;
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

		echo '</table>';
	}
	

	else
	echo 'There was problem in connecting with the server';
}

if(isset($_POST['$id'])){
	
	echo 'id is '.$id;
	}
	else echo 'No details to be shown ' ;
	
?>
</center>
</body>
