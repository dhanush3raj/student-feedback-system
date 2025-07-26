<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM feedbacks");

echo "<h2>Admin Panel - Feedbacks</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Subject</th><th>Rating</th><th>Comments</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['subject']}</td>
            <td>{$row['rating']}</td>
            <td>{$row['comments']}</td>
          </tr>";
}

echo "</table><br><a href='logout.php'>Logout</a>";
?>