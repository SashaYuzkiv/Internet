<?php
	require_once 'connect.php';
	$id = $_GET['id'];
	$employee = mysqli_query($link, "SELECT * FROM `worker_list` WHERE `id` = '$id'");
	$employee = mysqli_fetch_assoc($employee);
	
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h3>Update information</h3>
<form action="actions/update.php" method="post">
	<input type="hidden" name="id" value ="<?=$employee['id']?>">
	<p>Last name</p>
	<input = "text" name="lname" value = "<?= $employee['lname']?>">
	<p>Salary</p>
	<input = "number" name="salary" value = "<?= $employee['salary']?>">
	<p>Tax</p>
	<input = "number" name="tax" value = "<?= $employee['tax']?>"></input><br><br>
	<button type="submit">Update</button>
</form>
</body>
</html>