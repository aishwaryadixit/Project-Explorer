<?php
require_once('master.inc.php');
?>
<head>
	<style>
		table th,td{
			border:2px solid #340DF7;
			color:black;
			background-color:#0998DA;
			font-size:20;
			text-align:center;
			border-collapse: collapse;
			padding:5px;
			}
			
		.button{
			border:10px solid #340DF7;
			padding: 15px 32px;
			background-color:#115DD1;
			color:white;
			text-align:center;
			font-size:20;
			width:20%;
			}
	</style>
</head>
<body>
	<center>
		<h1 style="color:#377DF0;">Please enter the details of your project as follows</h1>
		<form action="uploadproj.php" method="POST">
			<table>
				<tr>
					<td>TITLE</td><td>DESCRIPTION</td><td>LANGUAGES</td><td>SKILLS</td><td>DEADLINE</td>
				</tr>
				
				<tr>
					<td ><textarea name="title" rows="6" cols="30"></textarea></td>
					<td ><textarea name="description" rows="6" cols="30"></textarea></td>
					<td ><textarea name="lang" rows="6" cols="30"></textarea></td>
					<td ><textarea name="skills" rows="6" cols="30"></textarea></td>
					<td ><input type="text" name="date"></td>
				</tr>
			</table><br><br>
			<button type=submit class=button>SUBMIT</button>
		</form>
		
		
		<form action="stu1.inc.php">
					<button type=submit class=button>See available projects</button>
		</form>

	</center>
</body>
<?php
$conn=mysql_connect('localhost','root','@idx');
if(@$conn){
	$t=$_POST['title'];
	$d=$_POST['description'];
	$l=$_POST['lang'];
	$s=$_POST['skills'];
	$date=$_POST['date'];
	
	if(!empty($t) && !empty($l))
	{
		$q="INSERT INTO project"."(title,description,lang,skills,date)"." values"."('$t','$d','$l','$s','$date')";
	
		mysql_select_db('pl');
		$qrun=mysql_query($q,$conn);
		if($qrun)
		{
			echo 'Insertion successful';
		}
		else echo '<br>Error in inserting data<br>';
	}
	else
	echo 'Some internal error was encountered';
}
else echo 'Error in connecting with the database';
?>

