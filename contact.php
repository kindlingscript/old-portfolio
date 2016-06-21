<?php
  $email_from = Trim(stripslashes($_POST['email']));
  $name = Trim(stripslashes($_POST['name']));
  $message = Trim(stripslashes($_POST['message']));
  $subject = "Message from " .$name. " (kindlingscript.com)";
  $body = "Name: ";
  $body .= $name;
  $body .= "\nE-mail: ";
  $body .= $email_from;
  $body .= "\nMessage: ";
  $body .= $message;

  if ($_POST['hello'] != '') {
    echo 'Spammer, eh? Don\'t like those around here.';
  };

  $success = mail('kindlingscript@gmail.com', $subject, $body);

  if ($success) {
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.html\">";
  };
?>