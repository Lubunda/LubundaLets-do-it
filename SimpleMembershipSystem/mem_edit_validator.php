<?php
require_once 'conn.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$residential_address = $_POST['residential_address'];
$birthday = $_POST['birthday'];
$cell_number = $_POST['cell_number'];
$email_address = $_POST['email_address'];
#$query = $conn->query("SELECT * FROM `member` WHERE `firstname` = '$firstname' && `lastname` = '$lastname'") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `member` WHERE 
	`firstname` = $firstname,
	`lastname` = $lastname,
	residential_address = `$residential_address`,
	birthday = $birthday,
	cell_number = $cell_number,
	email_address = $email_address") or die(mysqli_error($conn));
$validate = $query->num_rows;
if ($validate > 0) {
    echo "Success";
} else {
    echo "Error";
}
