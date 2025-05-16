<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "hostingabu@gmail.com";
    $subject = "New Form Submission";
    
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    
    // Create email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Date: $date\n";
    $body .= "Message:\n$message";
    
    // Set headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Success - redirect to thank you page
        header('Location: thank-you.html');
    } else {
        echo "Error sending message";
    }
} else {
    header("Location: your-form-page.html");
}
?>