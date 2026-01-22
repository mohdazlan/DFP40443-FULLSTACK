<!DOCTYPE html>
<html>

<head>
</head>
<body>
   
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Height (m)</label>
<input name="heightVal">
<label>Weight (kg)</label>
<input name="weightVal">
<input type="submit" value="Calculate">
</form>
</body>

<?php
$bmi = null;
if($_SERVER['REQUEST_METHOD'] == "POST") {
$height = $_POST['heightVal'];
$weight = $_POST['weightVal'];

$bmi = $weight/($height * $height);
}
?>

<?php if ($bmi): ?>
    <?php
    echo $bmi;
    ?>
<?php endif; ?>


    </html>

