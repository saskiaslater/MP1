<?

// This page offers a form that submits back to itself to insert new records into the database

// require the database initialization and functions
require 'database-config.php';
require 'functions.php';

if ($_GET["playmark"]) {
  $playmark = $_GET["playmark"];
  echo "<p>Check Output!</p>";
}

if ($_GET["playspace"]) {
  $playspace = $_GET["playspace"];
}

// insert submitted information into the database
// ideally we would analyze the info first to confirm it is accurate, but let's live dangerously
// but we did use mysqli_real_escape_string() above for security reasons
$sql = "INSERT INTO $databaseTable (player_mark, player_space)
        VALUES ( '$playmark', '$playspace' )";

$result = $db->query($sql); // process the SQL logic above, and get a result back

if (!$result) die("Insert Error: " . $sql . "<br>" . $db->error);
	


// onward to the HTML!

?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record</title>
  </head>

  <body>

  </body>

  </html>