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
?>