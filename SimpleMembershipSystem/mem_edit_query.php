<?php
require_once 'conn.php';
$memId = $_REQUEST["mem_id"];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$r_address = $_POST['residential_address'];
$bday=date("Y-m-d H:i:s",strtotime($_POST['birthday']));
//print($bday);
$c_number = $_POST['cell_number'];
$e_address = $_POST['email_address'];

$sql = "UPDATE `member` SET
	`firstname` = '$fname', 
	`lastname` = '$lname' ,
	`residential_address` = '$r_address',
	`birthday` = '$bday',
	`cell_number` = $c_number,
	`email_address` = '$e_address'
	WHERE `mem_id` = $memId";
$conn->query($sql) or die(mysqli_error($conn));