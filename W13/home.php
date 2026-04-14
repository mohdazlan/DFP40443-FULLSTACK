<?php
echo "Hello World";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Conference System</h1>
    <form method="post" action="home.php">
        <input type="submit" value="Check System" name="check">
        <?php if (isset($_POST['check'])): ?>
            <div id="result">
                <?php include 'message.php'; ?>
            </div>
        <?php endif; ?>
    </form>

</body>

</html>