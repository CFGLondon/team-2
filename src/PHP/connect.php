<?php

function get_dbc() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$dbc = mysqli_connect($servername, $username, $password, $dbname);
	if(!$dbc) die("Unable to connect to MySQL: " . mysqli_error($dbc));
	return $dbc;
}

?>