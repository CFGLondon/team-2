<?php
require 'connect.php';

function executeSELECT($query) {
	$conn = get_dbc();
	$result = $conn->query( $query );
	
	$num_rows = $conn->field_count;
	
	if ($num_rows > 0) {
		return $result;
	}
}

function login($username, $password) {
	$query_get_user = "SELECT password FROM user where username='$username'";
	$result = executeSELECT($query_get_user);
	
	if (strcmp($password, $result->fetch_assoc()["password"]) == 0) {
		echo "password matched";
	} else {
		echo "login failed";
	}
}

login ("testuser", "testpass");
?>