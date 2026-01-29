<?php
session_start();

if(!isset($_SESSION['loggedin'])) {
    header("Location:login.php");
    exit();
}
?>

<html>
    <head>
</head>
<body>
    <h3>This is a dashboard <?php echo $_SESSION['username']; ?></h3>
    <a href="about.php">About Me</a>
<a href="logout.php">log out </a>
</body>
    </html>