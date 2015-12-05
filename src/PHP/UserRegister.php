<?php

require_once 'connect.php';

$email = $_POST["email"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$telNo = $_POST["telNo"];
$dob = $_POST["dob"];
$street = $_POST["street"];
$number = $_POST["number"];
$city = $_POST["city"];
$postcode = $_POST["postcode"];
$password = $_POST["password"];

$sql = "INSERT INTO user (email,firstName,lastName,telNo,dob,street,number,city,postcode,password)
VALUES (" . $email. $firstName .  $lastName . $telNo . $dob .$street . $number . $city . $postcode .$password .")";