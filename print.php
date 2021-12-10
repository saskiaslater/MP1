<?


// require the database initialization and functions
require 'database-config.php';
require 'functions.php';


// select all columns (*) in the database
$sql = "SELECT * FROM $databaseTable"; 
$result = $db->query($sql);
if (!$result) die("Select Error: " . $sql . "<br>" . $db->error);
/*
$output = "<table>";

// loop through $allAppts with each $row available as $appt
foreach ($result as $appt) {
  $output .= "\t<tr style='background-color: #ddd;'>\n";
  
  $output .= "\t\t<td>" . $appt["player_mark"] . "</td>\n";
  $output .= "\t\t<td>" . $appt["player_space"] . "</td>\n";

  $output .= "\t</tr>\n";

  $counter++;
}
$output .= "</table>";

echo $output;
*/

$rows = array();
foreach ($result as $appt) {
  $rows[] = $appt;
}

$JSON = json_encode($rows);

echo $JSON;


?>
