<?php
require_once 'conn.php';
$memId = $_POST["memId"];
/*
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$residential_address = $_POST['residential_address'];
$birthday = $_POST['birthday'];
$cell_number = $_POST['cell_number'];
$email_address = $_POST['email_address'];
*/
//$query = $conn->query("SELECT * FROM `member` WHERE `firstname` = '$firstname' && `lastname` = '$lastname'") or die(mysqli_error());
$sql = "SELECT * FROM member WHERE mem_id = $memId";
/*	firstname =`$firstname` AND
	lastname = $lastname AND
	residential_address = `$residential_address` AND
	birthday = $birthday AND
	cell_number = $cell_number AND
	email_address = $email_address";
	*/
//print($sql);
//die;

$query = $conn->query($sql) or die(mysqli_error($conn));
$validate = $query->num_rows;
if ($validate > 0) {
    echo "Success";
} else {
    echo "Error";
}
