<?php
session_start();
$loggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="index.php">My School</a>
        <div>
            <?php if($loggedIn): ?>
                <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
            <?php else: ?>
                <a href="login.php" class="btn btn-outline-primary btn-sm">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<main class="container">