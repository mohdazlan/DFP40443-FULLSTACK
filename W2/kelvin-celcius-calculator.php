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
if($_SERVER['REQUEST_METHOD'] == "POST") {
$kelvin = $_POST['kelvinVal'];
$result = $kelvin - 273.15;
}
?>

<?php
echo $result;
?>
    </html>

