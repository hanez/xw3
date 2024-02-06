---
permalink: /cgi/uptime/
---

<?php
$uptime = shell_exec('uptime');
$version = shell_exec('uptime -V');

header('Content-Type: text/plain');
echo('Server ' . substr($version, 0, -1) . ': ' . $uptime);
?>
