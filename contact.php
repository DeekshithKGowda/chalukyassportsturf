<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Send email (Replace with your email)
    $to = "your-email@example.com";
    $headers = "From: " . $email;
    mail($to, $subject, $message, $headers);

    echo "Message sent successfully!";
} else {
    echo "Error: Invalid request!";
}
?>
