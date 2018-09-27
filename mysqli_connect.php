
<?php
	// This creates a connection to the whalesdb database
	// Set the access details as constants
	
	DEFINE('DB_USER', 'whaleuser');
	DEFINE('DB_PASSWORD', 'pass');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_NAME', 'whales_db');
	DEFINE('DB_PORT', 3307);
	
	//Make the connection
	$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) or die
		('Could not connect to MySQL: ' . mysqli_connect_error());
		
	//Set the Encoding
	mysqli_set_charset($dbcon, 'utf8');
?>
