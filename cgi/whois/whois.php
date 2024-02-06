---
permalink: /cgi/whois/
_note: https://www.w3docs.com/snippets/php/how-to-get-the-client-ip-address-in-php.html
---

<?php
if (!empty($_GET["host"]) and empty($_POST["host"])) {
  $host = $_GET["host"];
} elseif (!empty($_POST["host"]) and empty($_GET["host"])) {
  $host = $_POST["host"];
} else {
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //ip from share internet
    $host = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //ip pass from proxy
    $host = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $host = $_SERVER['REMOTE_ADDR'];
  }
}

$cmd = 'whois ' . $host;

$whois = shell_exec($cmd);

header('Content-Type: text/plain');
echo($whois);
?>
