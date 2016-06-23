<?php
include_once('st2_prodetails.php');
if(isset($_POST['view'])){
	$id=$_POST['view'];
	echo 'id is '.$id;
	}
	else echo 'No details to be shown ' ;	
?>
