<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set up email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Set up email recipient and subject
$to = "yogeshjha0707@gmail.com";
$subject = "Portfolio Message: $subject";

// Create email body
$body = "<p>Name: $name</p>";
$body .= "<p>Email: $email</p>";
$body .= "<p>Subject: $subject</p>";
$body .= "<p>Message: $message</p>";

// Send email
if (mail($to, $subject, $body, $headers)) 
{
    echo "Thank you for contacting us!";
    
} 
else 
{
    echo "Error sending email.";
    
}
?>