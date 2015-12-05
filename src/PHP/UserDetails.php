<?php

require_once 'connect.php';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "Email: " . $row["email"]. "<br>";
		echo "First Name: " . $row["firstName"]. "<br>";
		echo "Last Name: " . $row["lastName"]. "<br>";
		echo "Tel Number: " . $row["telNo"]. "<br>";
		echo "Date of Birth: " . $row["dob"]. "<br>";
		echo "Street: " . $row["street"]. "<br>";
	}
} else {
	echo "0 results";
}
//$conn->close();

//echo("Hello");

?>