<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

if ($user === 'student' && $pass === '1234') {
    $_SESSION['role'] = 'student';
    header("Location: student.php");
} elseif ($user === 'admin' && $pass === 'admin123') {
    $_SESSION['role'] = 'admin';
    header("Location: admin.php");
} else {
    echo "Invalid credentials. <a href='index.php'>Try again</a>";
}
?>