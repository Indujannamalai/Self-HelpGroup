<?php
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');	
	/* connect to mysql database */
	mysql_connect("localhost",root,"") or mysql_error();
	mysql_select_db("womensgroup") or mysql_error();	
?>