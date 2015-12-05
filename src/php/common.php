<?php
require_once 'connect.php';

function executeSELECT($query) {
	global $dbhandle;
	$result = $dbhandle->query( $query );
	
	$num_rows = $dbhandle->field_count;
	
	if ($num_rows > 0) {
		return $result;
	}
}
?>