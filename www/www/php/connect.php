<?php
	header('Access-Control-Allow-Origin: *');
	
	
	$conn = new mysqli('localhost', 'root', '', 'phonegapdb') or die(mysqli_error());

	// Check connection
if ($conn -> connect_errno) {
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
  }