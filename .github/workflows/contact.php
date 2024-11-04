<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitize and process the form data
  $name = htmlspecialchars(trim($_POST['name']));
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $message = htmlspecialchars(trim($_POST['message']));

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit;
  }

  // Email content
  $to = "your-email@example.com"; // Replace with your email address
  $subject = "Contact Form Submission from $name";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
  $headers = "From: $email";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message. Please try again later.";
  }
}
?>
