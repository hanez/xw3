---
permalink: /cgi/challenge/
---

<?php
session_start();
session_set_cookie_params(3600);

date_default_timezone_set("{{ site.timezone }}");

if(isset($_SESSION["one"])) {
  unset($_SESSION["one"]);
}

if(isset($_SESSION["two"])) {
  unset($_SESSION["two"]);
}

$_SESSION["one"] = rand(0, 9);
$_SESSION["two"] = rand(0, 9);
#$_SESSION["sum"] = $_SESSION["one"] + $_SESSION["two"];

$challenge = $_SESSION["one"] . " + " . $_SESSION["two"];

header('Content-Type: text/plain');
echo($challenge);
?>
