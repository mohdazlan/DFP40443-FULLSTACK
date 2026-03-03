<?php
require_once "config/app_config.php";

if($conn){
    echo "berjaya";
} else {
    echo "tidak berjaya";
    echo "<p>Error: ". mysqli_connect_error() . "</p>";
}
?>