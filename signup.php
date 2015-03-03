<?php
  $to = "contact@pinpo.fr";
  $subject = "Add this address to your mailing list";
  $email_field = $_POST['email'];
  $body = "E-Mail\n$email_field";

  $success = mail($to, $subject, $body);

  if(isset($_POST['ajax']) && $_POST['ajax']) {
    $response = array(
      'success' => $success ? "true" : "false",
      'message' => $success ? "Your email has been sent successfully." : "An error occured while sending your email<br> Please try again later",
    );
    die(json_encode($response));
  }
?>
