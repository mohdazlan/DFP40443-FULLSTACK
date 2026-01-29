<?php
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST"){
 $namapengguna= $_POST['user'];
 $katalaluan = $_POST['pass'];
if($namapengguna == "azlan" && $katalaluan == "root") {
    $_SESSION['username'] = $namapengguna;
    $_SESSION['loggedin'] = true;
    header("Location:dashboard.php");
    exit();
} else {
    $error = "Invalid user";
}

}

?>
<form method="POST" action="">
    User<input name="user" type="text">
    Password<input name="pass" type="password">
    <input type="submit" value="Login">
</form>
