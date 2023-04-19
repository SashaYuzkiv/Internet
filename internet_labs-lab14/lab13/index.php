<?php
	require_once 'connect.php';
?>
<html>
<head>
<meta charset="utf-8">
</head>
<style>
td{
	border: 1px solid black;
	text-align: center;
}
</style>
<body>
<table>
<tr>
 <td>ID</td>
 <td>Last Name</td>
 <td>Salary</td>
 <td>Tax</td>
</tr>
<?php

	if (isset($_GET['del'])){
		$id = $_GET['del'];
		
		$delete = "DELETE FROM worker_list WHERE id = $id";
		
		$do_req = $link->query($delete);

	}
	
	$result = mysqli_query($link, "SELECT * FROM worker_list");
	
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	
	
 foreach ($data as $employee){
	 ?>
	<tr>
		<td><?= $employee['id'] ?></td>
		<td><?= $employee ['lname'] ?></td>
		<td><?= $employee ['salary'] ?></td>
		<td><?= $employee ['tax'] ?></td>
		<td><a href="update.php?id=<?=$employee ['id'] ?>">UPDATE</a></td>
		<td><a href="actions/delete.php?id=<?=$employee['id']?>">DELETE</a></td>
	<tr>
<?php }?>
</table>
<h3>Add new</h3>
<form action="actions/add.php" method="post">
	<p>Last name</p>
	<input = "text" name="lname">
	<p>Salary</p>
	<input = "number" name="salary">
	<p>Tax</p>
	<input = "number" name="tax"><br><br>
	<button type="submit">Add</button>
</form>
</body>
</html>