<?
// require the database initialization and functions
require 'database-config.php';
require 'functions.php'; 

// did one or more checked boxes get submitted? let's delete them
		$sql = "DELETE FROM $databaseTable";
		$result = $db->query($sql);
		if (!$result) die("Delete Error: " . $sql . "<br>" . $db->error);

?>