<?php
require_once("config/app_config.php");
$sqlPeranan = "SELECT * FROM roles";
$HasilQSLPeranan = mysqli_query($conn, $sqlPeranan);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spmp | Pengguna Baru</title>
</head>

<body>
    <h2>Enter New User</h2>
    <form method="POST">
        username <input type="text" name="username"><br>
        password <input type="text" name="password"><br>
        <select name="peranan_id">
            <option value="">-- Sila Pilih Peranan --</option>
            <?php while ($row = mysqli_fetch_assoc($HasilQSLPeranan)): ?>
                <option value="<?php echo $row['id']; ?>">
                    <?php echo $row['name']; ?>
                </option>
            <?php endwhile; ?>
        </select>
        <input type="submit" value="Masuk Data">
    </form>
</body>

</html>