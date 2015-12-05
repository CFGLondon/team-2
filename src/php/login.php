<?php

require 'connect.php';
require 'common.php';

$email = $_POST["email"];
$password = $_POST["password"];

$query_get_user = "SELECT password FROM user where email='$email'";
$result = executeSELECT($query_get_user);
if (strcmp(sha1($password), $result->fetch_assoc()["password"]) == 0) {
	echo "password matched";
	} else {
	echo "login failed";
	}

?>