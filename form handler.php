<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_from = 'info@Safarinaleteipan.com'

$email_subject = 'New form Submission'

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Massage: $massage.\n";
              
$to = 'leteipanmontane@gmail.com'

$header = "From: $email_from\r\n";
$header. "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("location:Contact.html");
?>