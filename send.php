<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "paridhiagencies@example.com"; // replace with actual email
    $subject = $_POST["subject"];
    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n\n";
    $message .= "Message:\n" . $_POST["message"];
    $headers = "From: " . $_POST["email"];
    if(mail($to, $subject, $message, $headers)) {
        echo "Success";
    } else {
        echo "Error sending email.";
    }
}
?>