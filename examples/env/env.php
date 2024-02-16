---
layout: page
published: true
noToc: true
noDate: true
title: /examples/env/
subtitle:
permalink: /examples/env/
tags:
- env
- environment
- cgi
- bash
- gcc
- zsh
- perl
- php
- python
- ruby
- test
---

<?php
session_start();
session_set_cookie_params(3600);

date_default_timezone_set("{{ site.timezone }}");
?>

<h2>Environment</h2>

<h3>GET:</h3>

<?php
ksort($_GET);
echo '<ul>';
foreach ($_GET as $key => $value) {
    echo '<li>';
    echo $key . ': ' . $value;
    echo '</li>';
}
echo '</ul>';
?>

<h3>POST:</h3>

<?php
ksort($_POST);
echo '<ul>';
foreach ($_POST as $key => $value) {
    echo '<li>';
    echo $key . ': ' . $value;
    echo '</li>';
}
echo '</ul>';
?>


<h3>SESSION:</h3>

<?php
#var_dump($_SESSION);
ksort($_SESSION);
echo '<ul>';
foreach ($_SESSION as $key => $value) {
    echo '<li>';
    echo $key . ': ' . $value;
    echo '</li>';
}
echo '</ul>';
?>

<!-- ENABLE WITH CARE!!! <h3>SERVER:</h3>

<?php
/**
ksort($_SERVER);
echo '<ul>';
foreach ($_SERVER as $key => $value) {
    echo '<li>';
    echo $key . ': ' . $value;
    echo '</li>';
}
echo '</ul>';
*/?>-->

<!-- ENABLE WITH CARE!!! <h2>Runtimes</h2>

<?php
/**
echo '<ul>';
echo '<li>bash --version: ' . shell_exec('bash --version');
echo ' - <a href="https://www.gnu.org/software/bash/" class="ext">https://www.gnu.org/software/bash/</a></li><li>';
echo 'gcc --version: ' . shell_exec('gcc --version');
echo ' - <a href="https://gcc.gnu.org/" class="ext">https://gcc.gnu.org/</a></li><li>';
echo 'jekyll --version: ' . shell_exec('jekyll --version');
echo ' - <a href="https://jekyllrb.com/" class="ext">https://jekyllrb.com/</a></li><li>';
echo 'lighttpd -v: ' . shell_exec('lighttpd -v');
echo ' - <a href="https://www.lighttpd.net/" class="ext">https://www.lighttpd.net/</a></li><li>';
echo 'Linux (uname -a): ' . shell_exec('uname -a');
echo ' - <a href="https://kernel.org/" class="ext">https://kernel.org/</a></li><li>';
echo 'OS (cat /etc/os-release): ' . shell_exec('cat /etc/os-release');
echo ' - <a href="https://alpinelinux.org/" class="ext">https://alpinelinux.org/</a></li><li>';
echo 'perl --version: ' . shell_exec('perl --version');
echo ' - <a href="https://www.perl.org/" class="ext">https://www.perl.org/</a></li><li>';
echo 'php --version: ' . shell_exec('php --version');
echo ' - <a href="https://www.php.net/" class="ext">https://www.php.net/</a></li><li>';
echo 'python --version: ' . shell_exec('python --version');
echo ' - <a href="https://www.python.org/" class="ext">https://www.python.org/</a></li><li>';
echo 'ruby --version: ' . shell_exec('ruby --version');
echo ' - <a href="https://www.ruby-lang.org/en/" class="ext">https://www.ruby-lang.org/en/</a></li><li>';
echo 'zsh --version: ' . shell_exec('zsh --version');
echo ' - <a href="https://www.zsh.org/" class="ext">https://www.zsh.org/</a></li>';
echo '</ul>';
*/?>-->

<p>Page Source: <a href="https://git.xw3.org/xw3/xw3.org/src/branch/main/examples/env/env.php">https://git.xw3.org/xw3/xw3.org/src/branch/main/examples/env/env.php</a></p>

