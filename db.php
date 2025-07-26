<?php
$host = 'db4free.net'; // Update with real credentials later
$user = 'your_username';
$pass = 'your_password';
$db   = 'your_database';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>