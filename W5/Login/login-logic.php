<?php
session_start();
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // 1. Search for the user
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$user]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    // 2. Validate
    if ($data && $pass == $data['password']) { 
    $_SESSION['username'] = $data['username'];
    header("Location: dashboard.php");
    exit();
} else {
        header("Location: login.php?error=1"); // Fail!
    }
    exit();
}