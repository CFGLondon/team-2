<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
//select a database to work with
$selected = mysqli_select_db($dbname, $dbhandle) or die("Could not select table");
?>