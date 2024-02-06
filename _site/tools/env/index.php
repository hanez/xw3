<!DOCTYPE html>
<html lang="en" id="top">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>xw3.org:/tools/env/</title>
  <meta name="author" content="xw3.org">
  <meta name="generator" content="xw3.org">
  <meta name="robots" content="index,follow">
  <meta name="revisit-after" content="7 days">
  <meta name="description" content="A static HTML and CGI based website...">
  <meta name="keywords" content="env,environment,cgi,bash,gcc,zsh,perl,php,python,ruby,test">
  <link rel="shortcut icon" type="image/png" href="/favicon.png">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <link rel="stylesheet" type="text/css" href="/css/fork-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/cookieconsent.min.css" />
  <script src="/js/jquery-3.6.4.min.js" charset="utf-8"></script>
  <link rel="canonical" href="https://xw3.org/tools/env/">
  <link rel="alternate" type="application/rss+xml" title="RSS Feed - xw3.org" href="https://xw3.org/feed.xml">
</head>

  <body>

  <div class="site">
  <div id="loader" class="lds-dual-ring hidden overlay"></div>
<header class="site-header">
  <div class="wrapper">
    <!--<a class="site-title" href="/"><img width="80" src="/images/logo.png" alt="xw3.org"></a>-->
    <nav class="site-nav">
      <a href="#" class="menu-icon"><span class="fa fa-bars" aria-hidden="true"></span></a>
      <div class="trigger">
        <ul style="list-style: none;">
          <li><a class="page-link" href="/" style="text-decoration: none;">/</a></li>
          <li><a class="page-link" href="/about/" style="text-decoration: none;">/about/</a></li>
          <li><a class="page-link" href="/contact/" style="text-decoration: none;">/contact/</a></li>
          <li><a class="page-link" href="/tools/" style="text-decoration: none;">/tools/</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>


    <div class="page-content">
      <div class="wrapper">
<div class="post">
  <header class="post-header">
    <h1 class="post-title" id="terminal">xw3.org:/tools/env/<a href="../">..</a></h1>
    
    
  </header>
  <article class="post-content">
<?php
session_start();
session_set_cookie_params(3600);

date_default_timezone_set("CET/CEST");
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
ksort($_SERVER);
echo '<ul>';
foreach ($_SERVER as $key => $value) {
    echo '<li>';
    echo $key . ': ' . $value;
    echo '</li>';
}
echo '</ul>';
?>-->

<!-- ENABLE WITH CARE!!! <h2>Runtimes</h2>

<?php
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
?>-->


  </article>
</div>


      </div>
    </div>
<footer class="site-footer">
  <div class="wrapper">
    <div class="footer-col-wrapper">
      <p style="text-align:center;">
        Copyright &copy; 2024 - xw3.org -
        <a href="/feed.xml" class="rss"><i class="fa fa-rss" aria-hidden="true"></i><span style="display:none;"> RSS Feed</span></a> -
        <a href="https://git.xw3.org/xw3.org/xw3.org" class="git"><i class="fa fa-git" aria-hidden="true"></i><span style="display:none;"> Git repositories</span></a> -
        <a href="https://wiki.xw3.org/start" class="book"><i class="fa fa-book" aria-hidden="true"></i><span style="display:none;"> Wiki</span></a>
      </p>
    </div>
  </div>
</footer>


  </div>
  <p style="text-align: center; color: #e8e8e8; font-size: 12px;">
  <span id="uptime">NULL</span><br>
  Page generated at: Feb 6, 2024 (CET/CEST) using Jekyll on GNU/Linux @jupiter<br>
  Powered by: <span id="uname">NULL</span>
  </p>

  <script src="/js/cookieconsent.min.js" data-cfasync="false"></script>
  <!-- Source for configuration: https://www.osano.com/cookieconsent/download/ - https://www.osano.com/cookieconsent/documentation/compliance/ -->

  <script>
  $(document).ready(function(){
    $("#uname").load("/cgi/uname/");
    $("#uptime").load("/cgi/uptime/");
  });
  </script>

  <script>window.cookieconsent.initialise({"palette":{"popup":{"background":"#000","text":"#e8e8e8"},"button":{"background":"#bc6c21"}},"theme":"classic","position":"bottom","static":false,"content":{"message":"This website uses cookies to provide you with a better online experience. Leave this site if you don't accept the usage of cookies. No tracking cookies are being used! To find out more, please visit this website's  ","dismiss":"Got it!","link":"Privacy Policy.","href":"/privacy/"}});</script>
  </body>
</html>

