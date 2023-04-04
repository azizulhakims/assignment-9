<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = 'youremail@example.com';
$headers = "From: $email";

mail($to, $subject, $message, $headers);

echo "Thank you for contacting us, $name. We will get back to you soon!";
?>
