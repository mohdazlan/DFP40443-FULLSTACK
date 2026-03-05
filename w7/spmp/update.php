<?php
require_once("config/app_config.php");
$maklumat = mysqli_query($conn, "SELECT users.id,username as pengguna,email,password,name as peranan FROM spmp.users join roles on users.role_id = roles.id;") or die(mysqli_error($conn));

$mesej ="";
if($_SERVER["REQUEST_METHOD"] == "POST" &&isset( $_POST["update_user"])) {
    $userid = $_POST["user_id"];

    $user_id = $_POST["user_id"];
    $username = $_POST["username"];
    $role_id = $_POST["role_id"];

    $stmt = mysqli_prepare($conn,"UPDATE users SET username=?,role_id=? WHERE id=?");
    
    mysqli_stmt_bind_param($stmt,"ssi",$user_id,$username,$user_id);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
}

if(isset($_GET["edit_id"])) {
    $id = $_GET["edit_id"];
    $stmt = mysqli_prepare($conn,"SELECT * FROM users WHERE id=?");
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
}

$roles_result = mysqli_query($conn,"SELECT * FROM roles");
$user_roles_result = mysqli_query($conn,"SELECT *,upper(concat(firstname,' ',lastname)) as fullname FROM pmis.users inner join pmis.roles on users.role_id =roles.id");


?>

<?php  ?>

<h2>Edit Form</h2>
<form>

Username <input type="text" name="username">
Role  <select>
    <?php while($row = mysqli_fetch_array($roles_result)): ?>
                <option value="<?php  echo $row['id']; ?>">
                    <?php if($row['id'] == $edit_user['role_id']) echo 'selected';
                    <?php echo $row['name'];  
                </option>
        <?php endwhile; ?>
</select>
</form>

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spmp | Update</title>
</head>

<body>
    <?php echo $mesej; ?>
    <h2>Update User</h2>
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
                    <a href="update.php?edit_id=<?php echo $pengguna['id']; ?>">Kemaskini</a>
                </td>
                </tr>
            <?php endwhile; ?>

    </table>
</body>

</html>