<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $date = $_POST["date"];
  $message = $_POST["message"];

  // Prepare email content
  $to = "priyaedarshi@gmail.com";
  $subject = "New Appointment Booking";
  $email_content = "Name: " . $name . "\n";
  $email_content .= "Email: " . $email . "\n";
  $email_content .= "Phone: " . $phone . "\n";
  $email_content .= "Date: " . $date . "\n";
  $email_content .= "Message: " . $message . "\n";

  // Send email
  $headers = "From: " . $email . "\r\n";
  if (mail($to, $subject, $email_content, $headers)) {
    // Email sent successfully
    header("Location: thank-you.html");
    exit;
  } else {
    // Error sending email
    echo "Error: Unable to send the email. Please try again.";
  }
}
?>
