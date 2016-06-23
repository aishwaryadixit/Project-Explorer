<?php
include_once ('master.inc.php');
?>
<head>
	<style>
		.button {
   background-color: #115DD1;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;   
    font-size: 20px;
    width: 60%
}
	</style>
</head>

<center>
	<h2>
		<form action="loginpage.inc.php">
		<button type=submit class="button" value="contributer">Login as an employer</button>
		</form>
	
		<form action="logincontr.php">
		<button type=submit class="button" value="contributer">Login as an contributer</button>
		</form>
		
		<form action="registeremp.php">
		<button type=submit class="button" value="contributer">Signup as an employer</button>
		</form>
		
		<form action="registerstu.php">
		<button type="submit" class="button" value="employer">Signup as a contributer</button>
		</form>

	</h2>
	<img src="bg2.jpg" width="1000" height="300" style="opacity:0.7" vspace="10%">
</center>

