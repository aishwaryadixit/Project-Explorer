<?php
require_once('master.inc.php');
require_once('mysqlcon.inc.php');
function linkupload($id,$link)
	{
		echo 'Inside function  '.$id;
		echo $link;
		
		$q="insert into links"."(projid,link)"." values"."($id,'$link')";
		$qrun=mysql_query($q);
		if($qrun)
		echo 'inserted';
		else
		echo '<br>error in inserting the link in the table';
	}



if(isset($_POST['link']) && isset($_POST['address']))
{
		$link=$_POST['address'];
		$id=$_POST['link'];
		linkupload($id,$link);
}


?>
