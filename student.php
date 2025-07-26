<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'student') {
    header("Location: index.php");
    exit();
}
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head><title>Feedback Form</title></head>
<body>
  <h2>Student Feedback Form</h2>
  <form method="post" action="submit.php">
    <label>Subject:</label><input type="text" name="subject" required><br><br>
    <label>Rating (1-5):</label><input type="number" name="rating" min="1" max="5" required><br><br>
    <label>Comments:</label><br><textarea name="comments" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Submit Feedback">
  </form>
  <br>
  <a href="logout.php">Logout</a>
</body>
</html>