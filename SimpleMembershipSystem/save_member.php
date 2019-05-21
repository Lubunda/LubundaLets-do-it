<?php
require_once 'conn.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
#the test
$residential_address = $_POST['residentail_address'];
$birthday = $_POST['birthday'];
$cell_number = $_POST['cell_number'];
$email = $_POST['email'];
#the test

$conn->query("INSERT INTO `member` VALUES('', '$firstname', '$lastname','$residential_address','$birthday','$cell_number','$email_address')") or die(mysqli_error());
