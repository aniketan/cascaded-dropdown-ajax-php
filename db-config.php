<?php

/** The name of the database */
define('DB_NAME', 'mydb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

// connect using PDO
try { // attempt to create a connection to database
	$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
}
catch(PDOException $e) { // if it fails, we echo the error and die.
	echo $e->getMessage();
	die();
}
?>