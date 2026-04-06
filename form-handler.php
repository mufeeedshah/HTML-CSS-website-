<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['type'];
$message = $_POST['message'];

$email_form = 'dawood19co34@gmail.com';

$email_subject = 'new form submission';

$email_body = "user name: $name.\n".
             "user email: $visitor_email.\n".
               "subject: $subject.\n".
               "user message: $message.\n";

$to = 'dawood19co34@gmail.com';

$headers = "Form: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("location: contact.html")


?>