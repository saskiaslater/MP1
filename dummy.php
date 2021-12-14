<!DOCTYPE html>
<html>

<head>

  <!-- meta tags and title -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input</title>

  <!-- external and on-page CSS goes here -->
  <link rel="stylesheet" href="styles.css" media="all">
  <style>
    /* on-page CSS, if any, goes here */
  </style>

  <!-- external and on-page JavaScript goes here -->
  <script type="text/javascript" src="scripts.js" defer></script>
  <script>
    // on-page JavaScript, if any, goes here
  </script>

</head>

<body>


  <form action="add-record.php" method="get" onsubmit="">
    <!-- create form that allows inputs of data into the database-->

    <p>Player Mark <input type="text" name="playmark" id="playmark" placeholder="" required></p>
    <!-- first input of data into the database, first textbox asking what the player mark is, x or o -->
    <p>Player Space <input type="text" name="playspace" id="playspace" placeholder="" required></p>
    <!--  second input of data into the database, second textbox asking what the player space is, for example: a1 -->

    <p><button type="submit" <h1>Submit</h1></button></p>
    <!-- creates a button to press to submit the first and second input of data into the database, uploads it to the c panel -->

  </form>

</body>

</html>