<?php

require_once '../connect.php';

$id = $_POST['id'];
$lname = $_POST['lname'];
$salary = $_POST['salary'];
$tax = $_POST['tax'];

mysqli_query($link, "UPDATE `worker_list` SET `lname` = '$lname', `salary`='$salary', `tax`='$tax' WHERE `id` = '$id'");

header('Location: /');
