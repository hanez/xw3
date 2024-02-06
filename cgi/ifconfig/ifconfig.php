---
permalink: /cgi/ifconfig/
---

<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  //ip from share internet
  $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  //ip pass from proxy
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}

header('Content-Type: text/plain');
echo($ip);
?>
