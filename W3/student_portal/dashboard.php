<?php 
require 'includes/functions.php';
include 'includes/header.php'; 

if(isset($_POST['user'])&&isset($_POST['pass'])) {

$user =$_POST['user'];
$pass =$_POST['pass'];

if(isItDaniella($user,$pass)){
 echo "Welcome";
}else {
    echo "Wrong Useror Password";
}

} else {
    echo "<h2>Please Login First</h2>";
}


include 'includes/footer.php'; 
?>

