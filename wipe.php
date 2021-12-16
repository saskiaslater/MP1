<?
// require the database initialization and functions
require 'database-config.php'; // allows the database-config.php file to connect to this in order for the information to be wiped from the c panel 
require 'functions.php'; 

// did one or more checked boxes get submitted? let's delete them
		$sql = "DELETE FROM $databaseTable"; // allows the selected information to be deleted from the database 
		$result = $db->query($sql);
		if (!$result) die("Delete Error: " . $sql . "<br>" . $db->error);
header("Location: index.php");

?>