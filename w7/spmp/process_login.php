<?php
require_once "config/app_config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT users.id, users.username, users.password, roles.name   FROM users JOIN roles ON roles.id = users.role_id 
        WHERE users.username = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
//mysqli_stmt_execute($stmt);
mysqli_stmt_execute($stmt);
//if (mysqli_stmt_error($stmt)) {
//    echo "Execute error: " . mysqli_stmt_error($stmt);
//}
mysqli_stmt_bind_result($stmt, $id, $uname, $db_password, $role);

if (mysqli_stmt_fetch($stmt)) {
    if ($password === $db_password) {
        header("Location: dashboard.php");
        exit;
    }
}
  header("Location: login.php");
        exit;
?>