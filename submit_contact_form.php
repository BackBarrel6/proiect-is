<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Recipient Email Address
    $to = "rares.dobrisan@gmail.com";

    // Email Subject
    $subject = "Contact Form Submission";

    // Email Body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    // Additional Headers
    $headers = "From: $name <$email>";

    // Send Email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! Your message has been sent.'); window.location = 'contact.html';</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.'); window.location = 'contact.html';</script>";
    }
} else {
    // Redirect back to the contact page if accessed directly
    header("Location: contact.html");
    exit;
}

