<?


$savedCookie = null;

if ( $_COOKIE["gameCookie"] ) {
	$savedCookie = $_COOKIE["gameCookie"] + 1;
} else {
  $savedCookie = 1;
}

setcookie("gameCookie", $savedCookie, time() + (86400 * 30), "/");

header("Location: index.php");