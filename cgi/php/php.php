---
permalink: /cgi/php/index.php
---

<?php

header('Content-Type: text/plain');

echo('Hello from PHP!');
echo("\n\n");
echo('date("l jS \of F Y h:i:s A");');
echo("\n");
echo date("l jS \of F Y h:i:s A");
echo("\n\n");
echo('for ($x = 0; $x <= 10; $x++) { echo "$x\n"; }');
echo("\n");

for ($x = 1; $x <= 10; $x++) { echo "$x\n"; }

?>

