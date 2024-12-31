<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $to = "centreoflanguagestudies@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
    echo "Your message has been sent!";
} else {
    echo "Invalid submission.";
}
?>
