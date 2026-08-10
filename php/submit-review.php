<?php
// Demo endpoint. For a production public review system, use a Google Form or database-backed moderation system.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit('Method not allowed'); }
$name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
$rating = htmlspecialchars(trim($_POST['rating'] ?? ''), ENT_QUOTES, 'UTF-8');
$review = htmlspecialchars(trim($_POST['review'] ?? ''), ENT_QUOTES, 'UTF-8');
if (!$name || !$rating || !$review) { http_response_code(400); exit('Please complete the review.'); }
echo '<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Review received</title><style>body{font-family:Arial,sans-serif;background:#f4faff;display:grid;place-items:center;min-height:100vh;margin:0}.box{background:#fff;padding:40px;border-radius:22px;box-shadow:0 20px 60px #b9d8ee;text-align:center;max-width:560px}a{display:inline-block;margin-top:20px;padding:12px 18px;background:#0b74d1;color:#fff;border-radius:10px;text-decoration:none}</style></head><body><div class="box"><h1>Thank you, '. $name .'!</h1><p>Your sample review was received. For a live public review workflow, connect this page to your Google Form or database.</p><a href="../reviews.html">Back to reviews</a></div></body></html>';
?>