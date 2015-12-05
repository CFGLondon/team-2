<?php

require_once 'connect.php';

$email = $_POST["email"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$telNo = $_POST["telephone"];
$dob = $_POST["dob"];
$street = $_POST["street"];
$number = $_POST["houseno"];
$city = $_POST["town"];
$postcode = $_POST["postcode"];
$password = sha1($_POST["password"]);

$sql = "INSERT INTO `User`(`email`, `firstName`, `lastName`, `telNo`, `dob`, `street`, `number`, `city`, `postcode`, `password`)
VALUES ('$email' , '$firstName' , '$lastName' , '$telno' , '$dob' , '$street' , '$number' , '$city' ,  '$postcode' , '$password')";

if (mysqli_query($dbhandle, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($dbhandle);
}