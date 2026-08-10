<?php
require_once __DIR__ . '/config.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit('Method not allowed'); }

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$date = trim($_POST['date'] ?? '');
$time = trim($_POST['time'] ?? '');
$concern = trim($_POST['concern'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!$name || !$phone || !$email || !$date || !$time || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400); exit('Please complete all required fields correctly.');
}

$subject = 'New X Medical Appointment Request';
$body = "New appointment request\n\nName: $name\nPhone: $phone\nEmail: $email\nPreferred date: $date\nPreferred time: $time\nConcern: $concern\nMessage: $message\n";
$headers = "From: " . FROM_EMAIL . "\r\nReply-To: " . $email . "\r\nContent-Type: text/plain; charset=UTF-8\r\n";

$sent = mail(ADMIN_EMAIL, $subject, $body, $headers);
if ($sent) {
  header('Location: ../contact.html?status=appointment-sent#appointment');
  exit;
}
http_response_code(500);
echo 'The request could not be emailed by the server. Configure SMTP/mail delivery on your hosting account.';
?>