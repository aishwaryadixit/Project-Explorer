<?php
require_once('master.inc.php');
?>
<html>
		<body>
			<form action="loginpage.inc.php" method="Post">
			<center>				
				Username:   <input type="text" name="username"></br></br>
				Password:   <input type="password" name="password"></br></br>
				<input type="submit" name="Submit" value="submit">
			</center>

			
		</form>
		</body>
</html>


<?php
$conn=mysql_connect('localhost','root','@idx');
mysql_select_db('pl');
if(isset($_POST['username']) && isset($_POST['password']))
{
	$u=$_POST['username'];
	$p=$_POST['password'];
	if(empty($u) || empty($p))
	{
		echo 'please enter a user name and a password';
		exit(0);
	}
	if(!empty($u) && !empty($p))
	{
		//echo $u.'<br>';
		
		$q="select `conid` from `conlogin` where `username`='$u' and `password` ='$p'";
		mysql_select_db('pl');
		if($qrun=mysql_query($q))
		{
			//$q2="select fn from conlogin where conid = 1";
			//$qrun=mysql_query($q2);
			//$fn=mysql_result($qrun,0,'fn');
			//echo $fn;
			$rows=mysql_num_rows($qrun);
			
			if($rows==0)
			{
				echo 'PLEASE ENTER A CORRECT USERNAME OR PASSWORD';
			}
			else if($rows==1)
			{
				$usrid=mysql_result($qrun,0,'conid');
				$_SESSION['userid']=$usrid;
				header('Location: stu1.inc.php');
				
			}
		}
		
	}
	else
	{
		echo 'PLEASE ENTER A USERNAME AND PASSWORD';
	}
}
?>

