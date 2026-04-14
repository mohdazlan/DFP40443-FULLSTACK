<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "ecommerce_db";

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn) {
    die("Gagal sambungan, connection failed". mysqli_connect_error());
}

?>