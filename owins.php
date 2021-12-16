<?


$savedCookie = null;

if ( $_COOKIE["OgameCookie"] ) { //saves the information from each player when playing the game, lets the other player see their move
	$savedCookie = $_COOKIE["OgameCookie"] + 1;
} else {
  $savedCookie = 1;
}

setcookie("OgameCookie", $savedCookie, time() + (86400 * 30), "/");

header("Location: wipe.php");