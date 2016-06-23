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
<h1>Register as a contributer</h1>

	<form action="registerstu.php" method="POST">
	FIRST NAME:     	<input type="text" name="fn"><br><br>
	LAST NAME:      	<input type="text"  name="ln"><br><br>
	SEX:            	<input type="radio" name=a value="MALE">MALE<input type="radio" name=a value="FEMALE">FEMALE<input type="radio" name=a value="OTHER">OTHER<br><br>
	E-MAIL ADDRESS: 	<input type="text" name="em"><br><br>
	USERNAME: 			<input type="text" name="usr"><br><br>
	PASSWORD: 			<input type=password name=pswd><br><br>
	<button type="submit" class="button">REGISTER</button>
	
	
</form>
</center>
<?php
$conn=mysql_connect('localhost','root','@idx');
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$a=$_POST['a'];
$em=$_POST['em'];
$usr=$_POST['usr'];
$pswd=$_POST['pswd'];
if(!empty($fn) && !empty($ln) && !empty($a) && !empty($em) && !empty($usr) && !empty($pswd))
{
$ins="INSERT INTO conlogin"."(username,password,fn,ln,email,sex)"." values"."('$usr','$pswd','$fn','$ln','$em','$a')";
mysql_select_db('pl');
$result=mysql_query($ins,$conn);
if(!$result)
{
	echo 'ERROR!';
}
else
echo 'INSERTED';
}
?>
