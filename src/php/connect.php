<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test";

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password, $dbname) or die("Unable to connect to MySQL");
?>