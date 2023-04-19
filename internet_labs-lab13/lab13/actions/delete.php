<?php
require_once '../connect.php';

	$id =$_GET['id'];
	
	
	mysqli_query($link, "DELETE FROM `worker_list` WHERE `id` = '$id'");
	
	header('Location: /');