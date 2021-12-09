<?
  // default values for output 
$quoteText = "The city is not a concrete jungle. It is a human zoo.";
$quoteAttribute = "DESMOND MORRIS";
$colorTop = "#000099;"
$colorBottom = "#ffaa77"
$numberofBuildings = 10;

if ($_GET["topColor"]) {
  $colorTyp
  
}

//Output HTML/PHP for Skyline demo from Unit 3, Lesson 3/4

  //default values for output, in case the 
  $quoteText = "";
  $quoteAttribute = "";
  $colorTop = ""; 
  $colorBottom = "";
  $numberofTurns = 9;


// if data was submitted for the top row of boxes, let's use it...
if ($_GET["colorTop"]) {
  $colorTop = $_GET["topColor"];
}

// if data was submitted for the second row of boxes, let's use it...
if ($_GET["bottomColor"] {
  $colorBottom = $_GET["bottomColor"];
}
    
//if data was submitted for the third row of boxes, let's use it...
//if ($_GET["quote"]) {
//  $quoteText = $_GET["quote"];
  
if (filter_var( htmlspecialchars( $_GET["quote"]), FILTER_SANITIZE_STRING)) {
    $quoteText = filter_var( htmlspecialchars( $_GET["quote"] ), FILTER_SANITIZE_STRING);
      
 }
  
    
//if data was submitted to play again 
if ($_GET["attribute"]) {
  $quoteAttribute = $_GET["attribute"];
}
    
//if data was submitted for 
if ($_GET["buildings"]) {
  $numberOfBuildings = $_GET["buildings"]
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