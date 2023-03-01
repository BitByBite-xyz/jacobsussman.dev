<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "jacob@bitbybite.xyz";
  $subject = "New message from website";
  $body = "Name: $name\nEmail: $email\n\n$message";

  mail($to, $subject, $body);

  header("Location: index.html");
  exit;
}
?>
