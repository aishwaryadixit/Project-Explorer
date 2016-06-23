<?php
if(!@mysql_connect('localhost','root','@idx'))
{
	die('ERROR in connecting!');
}

else
{
echo 'CONNECTED';
}
mysql_select_db('pl');

?>
