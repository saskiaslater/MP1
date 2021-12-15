<?
// require the database initialization and functions
require 'database-config.php'; // allows the database-config.php file to connect to this in order for the information to be wiped from the c panel 
require 'functions.php'; 

// did one or more checked boxes get submitted? let's delete them
		$sql = "DELETE FROM $databaseTable"; // allows the selected information to be deleted from the database 
		$result = $db->query($sql);
		if (!$result) die("Delete Error: " . $sql . "<br>" . $db->error);


//cycle through the entire $_COOKIE array and reset every value to expire in 1 millisecond
foreach ($_COOKIE as $key => $value) {
  if ($key != "PHPSESSID") setcookie($key, $value, 1, '/');
}

header("Location: index.php");