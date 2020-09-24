<?php

if (isset($_POST['submit']))
{
  $name = $_POST['name'];
  $mail_from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $mail_to = "kylerobinson456@outlook.com";

  $headers = "From: ".$mail_from;
  $txt = $name."\n\n".$message;

  mail($mail_to, $subject, $txt, $headers);
  header("Location: contact.php?mail_sent");
}

?>
