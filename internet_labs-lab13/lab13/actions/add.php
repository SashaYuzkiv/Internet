<?php

require_once '../connect.php';

$lname = $_POST['lname'];
$salary = $_POST['salary'];
$tax = $_POST['tax'];

mysqli_query($link, "INSERT INTO `worker_list` (`lname`, `salary`, `tax`) VALUES ('$lname', '$salary', '$tax')");

header('Location: /');
