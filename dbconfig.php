<?php

	$db = mysqli_connect('127.0.0.1', 'root', 'apmsetup', 'Board37')
		or die('Error Connecting to MySQL server.'); 
	mysqli_query($db, "set names utf8"); 
?>