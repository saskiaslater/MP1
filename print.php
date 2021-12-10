<?
// select all columns (*) in the database
$sql = "SELECT * FROM $databaseTable
				ORDER BY appt"; 
$result = $db->query($sql);
if (!$result) die("Select Error: " . $sql . "<br>" . $db->error);

?>
