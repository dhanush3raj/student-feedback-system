<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'student') {
    header("Location: index.php");
    exit();
}

include 'db.php';

$subject = $_POST['subject'];
$rating = $_POST['rating'];
$comments = $_POST['comments'];

$stmt = $conn->prepare("INSERT INTO feedbacks (subject, rating, comments) VALUES (?, ?, ?)");
$stmt->execute([$subject, $rating, $comments]);

echo "Feedback submitted successfully. <a href='student.php'>Back</a>";
?>