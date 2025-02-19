<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "swarayabraham39@gmail.com";
    $subject = "New Contact Form Message";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    echo "Message sent successfully!";
}
?>
