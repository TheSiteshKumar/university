<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$messeage = $_POST["message"];

$email_from = 'thesiteshkumar@gmail.com';

$email_subject = 'Contact for admission';

email_body = 'User Name: $name.\n'
                'User Name: $visitor _email.\n'
                'User Name: $subject.\n'
                'User Name: $message.\n';

$to = 'siteshkumarya@gmail.com';

$headers = "from: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

headers("Location: contact.html");
?>