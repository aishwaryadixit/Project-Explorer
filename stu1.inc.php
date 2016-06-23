<?php
require_once('master.inc.php');

if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
{
	echo 'You have logged in';
}

?>
?>
<head>
	<style>
		table th,td{
			border:solid black;
			color:white;
			padding:10px;
			border-collapse:collapse;
			background-color:black;
			height:20%;
			width:20%;
			}
			.button{
				background-color:black;
				color:white;
			}
			
			.button2{
				background-color:#115DD1;
				color:white;
				padding: 8px 15px;
				font-size:16px;
			}
			
	</style>
</head>
<body>
	<form action="home.php" method="POST">
			<button type="submit" class=button2 >Logout</button>
	</form>
	<center>
	<h1 style="background-color:white;width:60%;">Choose the project that matches your skills the most</h1>
<?php
$conn=mysql_connect('localhost','root','@idx');
$q="select a.projid,a.title,b.link from project a left join links b on a.projid=b.projid";
mysql_select_db('pl');
$result=mysql_query($q,$conn);


if($result)
{
	
	echo '<form action="stu2_prodetails.php" method="post"><table>';
	while($row=mysql_fetch_assoc($result))
	{
	echo '<tr>';		
	$id=$row['projid']; echo '<td>'.$id.'</td>';
	$title=$row['title'];	echo '<td>'.$title.'</td>';
	$link=$row['link']; 
	if(!empty($link))		
	{echo '<td>'.$link.'</td>';}
	else
	{echo '<td>Yet to be takenup</td>';}
	echo '<td><button type=submit class=button name=view value="' . htmlspecialchars($id) . '">View</button></td>';
	echo '</tr>';
		
	}
	echo '</table></form>';
}
else
echo 'There was a problem in connecting with the server<br>';


?>
</center>
</body>

