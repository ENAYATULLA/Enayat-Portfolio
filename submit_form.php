<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Compose email content
    $subject = "New Contact Form Submission";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Send email
    $to = "your-email@example.com"; // Replace with your email address
    $headers = "From: $email";
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Handle case where form was not submitted
    echo "This script should be accessed via a POST request.";
}
?>
