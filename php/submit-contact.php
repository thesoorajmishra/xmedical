<?php
require_once __DIR__ . '/config.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit('Method not allowed'); }

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!$name || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400); exit('Please complete all required fields correctly.');
}

$subject = 'New X Medical Contact Message';
$body = "New contact message\n\nName: $name\nEmail: $email\n\nMessage:\n$message\n";
$headers = "From: " . FROM_EMAIL . "\r\nReply-To: " . $email . "\r\nContent-Type: text/plain; charset=UTF-8\r\n";

if (mail(ADMIN_EMAIL, $subject, $body, $headers)) {
  header('Location: ../contact.html?status=message-sent#contact-form');
  exit;
}
http_response_code(500);
echo 'The message could not be emailed by the server. Configure SMTP/mail delivery on your hosting account.';
?>