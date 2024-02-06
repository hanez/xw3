---
permalink: /cgi/mail/
---

<?php
session_start();
session_set_cookie_params(3600);

date_default_timezone_set("{{ site.timezone }}");

$error = "";

$sum = $_SESSION["one"] + $_SESSION["two"];

if ($_POST["sum"] != $sum) { $error = "{{ site.challenge_error }}"; }

if ($_POST["sum"] == $sum) {
  $mailTo = "{{ site.email }}";

  $mailAddress = "noreply@{{ site.url_short }}";
  if($_POST["email"]) {
    $mailAddress = $_POST["email"];
  }

  $mailHeaders = "From: " . $_POST["name"] . " <" . $mailAddress . ">"  . "\r\n" .
  "Date: " . date(DATE_RFC822);

  $mailSubject = "[{{ site.url_short }}]: No subject!";
  if($_POST["subject"]) {
    $mailSubject = "[{{ site.url_short }}]: " . $_POST["subject"];
  }

  $mailBody = $_POST["message"] . "\n\n" . "Website: " . $_POST["website"] . "\nUser Agent: " . $_SERVER['HTTP_USER_AGENT'];
  if (!@mail($mailTo, $mailSubject, $mailBody, $mailHeaders)) { $error = "Failed to send mail!"; }

  unset($_SESSION["one"]);
  unset($_SESSION["two"]);
}

header('Content-Type: text/plain');
if ($error=="") {
  echo("{{ site.mail_thank_you }}");
} else {
  //echo($error . " (". $_POST["sum"] . "/" . $sum . ")");
  echo($error);
}
?>
