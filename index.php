<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- meta tags and title -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tic-Tac-Toe</title>

  <!-- external and on-page CSS goes here -->
  <link rel="stylesheet" href="styles.css" media="all">
  <style>
    /* on-page CSS, if any, goes here */
  </style>

  <!-- external and on-page JavaScript goes here -->
  <script type="text/javascript" src="scripts2.js" defer=""></script>
  <script>
    // on-page JavaScript, if any, goes here
  </script>

</head>

<body>

  <h1>TIC-TAC-TOE</h1>

  <div id="wincount">
    <p><strong># OF X WINS: <?= $_COOKIE["gameCookie"] ?></strong><a href="clear-cookies.php">Reset</a></p>

  </div>

  <div id="owincount">
    <p><strong># OF O WINS: <?= $_COOKIE["OgameCookie"] ?></strong><a href="clear-cookies.php">Reset</a></p>

  </div>


  <table>


    <tbody>
      <!-- making a table to map out tic tac toe board -->
      <tr>
        <td>
          <div id="a1">
            <!-- id for each square on the board -->
            <img>
            <!-- don't need any source on the img tag, we'll set that in JavaScript -->
          </div>
        </td>
        <td class="vert">
          <div id="b1">
            <img>
          </div>
        </td>
        <td>
          <div id="c1">
            <img>
          </div>
        </td>
      </tr>

      <tr>
        <td class="hori">
          <div id="a2">
            <img>
          </div>
        </td>
        <td class="vert hori">
          <div id="b2">
            <img>
          </div>
        </td>
        <td class="hori">
          <div id="c2">
            <img>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div id="a3">
            <img>
          </div>
        </td>
        <td class="vert">
          <div id="b3">
            <img>
          </div>
        </td>
        <td>
          <div id="c3">
            <img>
          </div>
        </td>
      </tr>
    </tbody>
  </table>


  <div id="replay">
    <button onclick="location.href = 'wipe.php';"/>Play Again</button>
    <!-- makes the play again button reload the page to clear the board -->
  </div>




</body>

</html>