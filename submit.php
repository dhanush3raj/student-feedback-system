<?php
include 'db.php';
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'student') {
    header("Location: index.php");
    exit();
}

$subject = $_POST['subject'];
$rating = $_POST['rating'];
$comments = $_POST['comments'];

$sql = "INSERT INTO feedbacks (subject, rating, comments) VALUES ('$subject', '$rating', '$comments')";
if (mysqli_query($conn, $sql)) {
    echo "Feedback submitted successfully. <a href='student.php'>Back</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>