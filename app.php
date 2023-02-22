<?php
  // Get the form data
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Compose the email message
  $to = $email;
  $subject = 'Notification from Example Website';
  $body = "Dear valued customer,\n\n$message\n\nBest regards,\nThe Example Team";

  // Send the email
  $headers = "From: notifications@example.com\r\n";
  $headers .= "Reply-To: notifications@example.com\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  mail($to, $subject, $body, $headers);

  // Redirect the user to a thank you page
  header("Location: thankyou.html");
  exit();
?>
