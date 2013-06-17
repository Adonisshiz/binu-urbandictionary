<?php
	
	$hostname_binu_urbandictionary = getenv('DB_HOST');
	$database_binu_urbandictionary = getenv('DB_NAME');
	$username_binu_urbandictionary = getenv('DB_USER');
	$password_binu_urbandictionary = getenv('DB_PASS');
	
	$binu_urbandictionary = mysql_pconnect($hostname_binu_urbandictionary, $username_binu_urbandictionary, $password_binu_urbandictionary) or trigger_error(mysql_error(),E_USER_ERROR); 
	
?>