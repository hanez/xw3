---
permalink: /cgi/auth/
---

<?php
session_start();
session_set_cookie_params({{ site.lifetime }});

date_default_timezone_set("{{ site.timezone }}");

header('Content-Type: text/plain');
echo('OK');

