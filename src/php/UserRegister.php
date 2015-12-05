<?php

require_once 'connect.php';

$email = $_POST["email"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$gender = $_POST["gender"];
$dob = date("Y-m-d", strtotime($_POST["dob"]));
$telNo = $_POST["telephone"];
$addr1 = $_POST["address1"];
$addr2 = $_POST["address2"];
$town = $_POST["town"];
$postcode = $_POST["postcode"];
$password = sha1($_POST["password"]);

$newPerson = "INSERT INTO person (fName, sName, gender, dob, phoneNo, isElderly) VALUES ('$firstName' , '$lastName' , '$gender' , '$dob' , '$telNo' , 0)";
if (mysqli_query($dbhandle, $newPerson)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $newPerson . "<br>" . mysqli_error($dbhandle);
}

$newPersonID = mysqli_query($dbhandle, "SELECT MAX(id) FROM Person");

while ($row = $result->fetch_assoc()) {
	echo $row['id']."<br>";
}

echo $newPersonID;

$newVolunteer = "INSERT INTO volunteer (Personid, email, password, addr1, addr2, town, postcode, isValidated) VALUES ('$newPersonID', '$email' , '$password', '$addr1' , '$addr2' , '$town' ,  '$postcode' , 0 )";

if (mysqli_query($dbhandle, $newVolunteer)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $newVolunteer . "<br>" . mysqli_error($dbhandle);
}