<?php
	$host="localhost";
	$user="root";
	$password="";
	$database="blog";
	
	if(!mysql_connect($host,$user,$password) || !mysql_select_db($database))
	{
		die('NOT CONNECTED WITH DATABASE');
	}
	
?>