<?


$savedCookie = null;

if ( $_COOKIE["gameCookie"] ) { //saves the information from each player when playing the game, lets the other player see their move
	$savedCookie = $_COOKIE["gameCookie"] + 1;
} else {
  $savedCookie = 1;
}

setcookie("gameCookie", $savedCookie, time() + (86400 * 30), "/");

header("Location: index.php");