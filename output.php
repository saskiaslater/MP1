<?

if ($_GET["playmark"]) {   // if the player mark textbox is inputed into the database, the output after submit is clicked will say Player Mark and Player Space! 
  $playmark = $_GET["playmark"];
  echo "<p>Player Mark and Player Space!</p>"; // echos the function so that we know it's working 
}

if ($_GET["playspace"]) { // makes it possible for player space textbox to be uploaded to the database on the c panel 
  $playspace = $_GET["playspace"];
}


<!DOCTYPE html>
<html>

	<head>

		<!-- meta tags and title -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Output</title>

		<!-- external and on-page CSS goes here -->
		<link rel="stylesheet" href="styles.css" media="all">
		<style>
  

  </style>

  <!-- external and on-page JavaScript goes here -->
  <script type="text/javascript" src="scripts.js" defer></script>
  <script>
    // on-page JavaScript, if any, goes here
  </script>

  </head>

  <body>
    
    
   

  </body>

  </html>


?>