<?php
session_start();
session_set_cookie_params(3600);

date_default_timezone_set("CET/CEST");

$error = "";

$sum = $_SESSION["one"] + $_SESSION["two"];

if ($_POST["sum"] != $sum) { $error = "Invalid challenge result! Please try again... :("; }

if ($_POST["sum"] == $sum) {
  $mailTo = "mail@xw3.org";

  $mailAddress = "noreply@xw3.org";
  if($_POST["email"]) {
    $mailAddress = $_POST["email"];
  }

  $mailHeaders = "From: " . $_POST["name"] . " <" . $mailAddress . ">"  . "\r\n" .
  "Date: " . date(DATE_RFC822);

  $mailSubject = "[xw3.org]: No subject!";
  if($_POST["subject"]) {
    $mailSubject = "[xw3.org]: " . $_POST["subject"];
  }

  $mailBody = $_POST["message"] . "\n\n" . "Website: " . $_POST["website"] . "\nUser Agent: " . $_SERVER['HTTP_USER_AGENT'];
  if (!@mail($mailTo, $mailSubject, $mailBody, $mailHeaders)) { $error = "Failed to send mail!"; }

  unset($_SESSION["one"]);
  unset($_SESSION["two"]);
}

header('Content-Type: text/plain');
if ($error=="") {
  echo("Thank you for contacting me... :)");
} else {
  //echo($error . " (". $_POST["sum"] . "/" . $sum . ")");
  echo($error);
}
?>
