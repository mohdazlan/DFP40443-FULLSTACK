<?php
require_once("config/app_config.php");
$maklumat = mysqli_query($conn, "SELECT users.id,username as pengguna,email,password,name as peranan FROM spmp.users join roles on users.role_id = roles.id;") or die(mysqli_error($conn));

$mesej ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userid = $_POST["user_id"];

    $stmt = mysqli_prepare($conn,"DELETE FROM users WHERE id=?");
    mysqli_stmt_bind_param($stmt,"i", $userid);

    if(mysqli_stmt_execute($stmt)){
        $mesej = "<p style='color:green'>User succssfully deleted!</p>";
    }else{
         $mesej = "<p style='color:red'>User not succssfully deleted!</p>";
       // echo "". mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spmp | Delete</title>
</head>

<body>
    <?php echo $mesej; ?>
    <h2>Delete User</h2>
    <table border="1">
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
                <td>
                    <form method="POST" action="">
                        <input type="hidden" name="user_id" value="<?php echo $pengguna['id']; ?>">
                        <input type="submit" value="Padam">
                    </form>
                </td>
                </tr>
            <?php endwhile; ?>

    </table>
</body>

</html>