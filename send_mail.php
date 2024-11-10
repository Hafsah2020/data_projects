<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["contact_name"]));
    $email = htmlspecialchars(trim($_POST["contact_email"]));
    $message = htmlspecialchars(trim($_POST["contact_message"]));

    $to = "hafsahoyin@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent. Please try again.";
    }
}
?>
