<?php
	$db_host='localhost';
	$db_name='Worker';
	$db_user='root';
	$db_pass='';
	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	
	if(!$link)
{
    throw new Exception("Not linked to DB!");
}