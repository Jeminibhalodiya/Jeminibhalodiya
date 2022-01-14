<?php
	$db=new mysqli('localhost','root','','student1');
	if($db->connect_errno)
	{
		echo $db->connect_error;
		exit;
	}
?>