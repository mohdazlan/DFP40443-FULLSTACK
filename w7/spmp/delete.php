<?php
require_once("config/app_config.php");
$maklumat = mysqli_query($conn, "SELECT users.id,username as pengguna,email,password,name as peranan FROM spmp.users join roles on users.role_id = roles.id;") or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spmp | Delete</title>
</head>

<body>
    <h2>Delete User</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama Pengguna</th>
            <th>Peranan</th>
            <th>Tindakan</th>
        </tr>
       
            <?php while ($pengguna = mysqli_fetch_assoc($maklumat)): ?>
                 <tr>
                <td><?php echo $pengguna['id']; ?></td>
                <td><?php echo $pengguna['pengguna']; ?></td>
                <td><?php echo $pengguna['peranan']; ?></td>
                <td><input type="submit" value="Padam"></td>
                </tr>
            <?php endwhile; ?>

    </table>
</body>

</html>