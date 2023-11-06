<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "awehbi@uno.edu";
    $headers = "From: $email";
    $mailMessage = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    mail($to, $subject, $mailMessage, $headers);
    // You can add a success message here if you want.
}
?>
