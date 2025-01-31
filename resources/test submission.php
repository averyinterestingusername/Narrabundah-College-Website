<?php
// Get form data
$rating = $_POST['rating'] ?? '';
$reason = $_POST['reason'] ?? '';
$importance = $_POST['RadioGroup1'] ?? '';
$agreements = $_POST['CheckboxGroup1'] ?? [];
$urgent_attention = $_POST['urgent_attention'] ?? '';

// Prepare data to write to file
$data = "Rating: $rating\n";
$data .= "Reason: $reason\n";
$data .= "Importance: $importance\n";
$data .= "Agreements: " . implode(', ', $agreements) . "\n";
$data .= "Urgent Attention: $urgent_attention\n";
$data .= "-----------------\n";

// File to store form submissions
$file = 'form_submissions.txt';

// Write data to file
file_put_contents($file, $data, FILE_APPEND);

// Redirect back to the homepage or wherever you want
header('Location: index.html');
exit();
?>
