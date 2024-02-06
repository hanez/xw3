---
permalink: /cgi/uname/
---

<?php
$uname = shell_exec('uname -mrs');

$pos = strpos($uname, '-', 0);

$res = substr($uname, 0, $pos);

header('Content-Type: text/plain');
echo($res);
?>
