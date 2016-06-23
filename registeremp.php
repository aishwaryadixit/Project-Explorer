<?php
require_once('master.inc.php');
?>
<head>
	<style>
		.button{
		color:"white";
		 background-color: #115DD1;
		 border: solid-black;
		}
		</style>

</head>
<center>
<h1 style="color:white;">Register as an employer</h1>

	<form action="registeremp.php" method="POST" style="color:white;">
	FIRST NAME:     	<input type="text" name="fn"><br><br>
	LAST NAME:      	<input type="text"  name="ln"><br><br>
	SEX:            	<input type="radio" name=a value="MALE">MALE<input type="radio" name=a value="FEMALE">FEMALE<input type="radio" name=a value="OTHER">OTHER<br><br>
	E-MAIL ADDRESS: 	<input type="text" name="em"><br><br>
	ORGANIZATION NAME:  <input type="text" name="org" ><br><br>
	CONTACT:			<input type="text"  name="contact"><br><br>
	USERNAME: 			<input type="text" name="usr"><br><br>
	PASSWORD: 			<input type=password name=pswd><br><br>
	<button type="submit" class="button">REGISTER</button>
		
</form>
</center>
<?php

$conn=mysql_connect('localhost','root','@idx');
if (!$conn)
echo 'Error connecting database....';
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$org=$_POST['org'];
$contact=$_POST['contact'];
$a=$_POST['a'];
$em=$_POST['em'];
$usr=$_POST['usr'];
$pswd=$_POST['pswd'];

if(!empty($fn) && !empty($ln)  && !empty($org) && !empty($a) && !empty($em) && !empty($usr) && !empty($pswd))
{
$ins="INSERT INTO emplogin"."(fn,ln,sex,em,org,contact,username,password)"." values"."('$fn','$ln','$a','$em','$org','$contact','$usr','$pswd')";
mysql_select_db('pl');
$result=mysql_query($ins,$conn);
if(!$result)
{
	echo 'NOT INSERTING ...ERROR!';
}
}


?>
