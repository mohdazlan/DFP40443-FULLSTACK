<!DOCTYPE html>
<html>

<head>
</head>
<body>
   
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Kelvin</label>
<input name="kelvinVal">
<input type="submit" value="Calculate">
</form>
</body>

<?php
$result = null;
if($_SERVER['REQUEST_METHOD'] == "POST") {
$kelvin = $_POST['kelvinVal'];
$result = $kelvin - 273.15;

if($result < 30) {
 echo "cold";
}  elseif($result<50)
echo "mild";
else {
 echo "hot";
}
}
?>

<?php
echo $result;
?>
    </html>

