<?


//cycle through the entire $_COOKIE array and reset every value to expire in 1 millisecond
foreach ($_COOKIE as $key => $value) {
  if ($key != "PHPSESSID") setcookie($key, $value, 1, '/');
}

header("Location: index.php");