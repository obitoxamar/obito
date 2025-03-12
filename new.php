<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','ipgp5');

// get the post records
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];

// database insert SQL code
$sql = "INSERT INTO `entries` (`name`, `phone`, `email`, `text`) VALUES ( '$name', '$phone', '$email', '$text')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>