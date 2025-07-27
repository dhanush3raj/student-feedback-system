<?php
try {
    $conn = new PDO("sqlite:feedback.db");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->exec("CREATE TABLE IF NOT EXISTS feedbacks (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        subject TEXT,
        rating INTEGER,
        comments TEXT
    )");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>