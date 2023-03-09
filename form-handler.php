<?php
$name=$-POST['name'];
$visitor-email=$-POST['email'];
$subject=$-POST['subject'];
$message=$-POST['message'];
$email-from='info@yourwebsite.com';
$email-subject='New Form Submission';
$email-body="user name: $name.\n".
            "user email: $visitor_email.\n".
            "subject: $subject.\n".
            "message: $message.\n";
$to='abdulazizibrahim1731@gmail.com';
$headers="From: $email_from \r\n.";
$headers="Reply To: $visitor_email \r\n.";
mail("$to, $email_subject, $email_body, $headers");
header=("Location: contact.html");
?>