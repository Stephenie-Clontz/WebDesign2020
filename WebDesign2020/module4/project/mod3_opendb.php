<?php
// creates connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//checks connection
if (!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}
?>