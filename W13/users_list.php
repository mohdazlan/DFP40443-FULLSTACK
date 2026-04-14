<?php
include 'db.php';
$sql = "SELECT * FROM users";

$result=mysqli_query($conn,$sql);
$output = "<ul>";

while($row = mysqli_fetch_assoc($result)){
    $output.="<li>".$row['username']."</li>";
}
$output.="</ul>";

echo $output;
?>