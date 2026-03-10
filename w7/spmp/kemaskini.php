<?php
include("includes/header.php");
$result_array = null;
$message = "";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $username = $_POST["username"];
    $role_id = $_POST["role_id"];

    $stmt = mysqli_prepare($conn, "UPDATE users SET username=?, role_id=? WHERE id=?");
    mysqli_stmt_bind_param($stmt, "sii", $username, $user_id, $role_id);

    if (mysqli_stmt_execute($stmt)) {
        $message = "<p style='color:green,'>User Updated</p>";
    } else {
        $message = "<p style='color:red,'>User Not Updated</p>" . " " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

if (isset($_GET["hantar_id"])) {
    echo "Editing ID: " . $_GET["hantar_id"];
    $edit_id = $_GET["hantar_id"];
    $stmt = mysqli_prepare($conn, "SELECT id,username, role_id FROM users WHERE id=?");
    mysqli_stmt_bind_param($stmt, "i", $edit_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $result_array = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
}

$roles_names = mysqli_query($conn, "SELECT id,name FROM roles");
$user_result = mysqli_query($conn, "SELECT users.id,username,roles.name as role_name FROM users join roles ON role_id = roles.id ORDER BY username;");
?>
<?php if ($result_array): ?>
    <h3>Edit User</h3>
    <form style="background-color: yellow" action="" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $result_array["id"] ?>"><br><br>
        <input type="text" name="username" value="<?php echo $result_array["username"] ?>"><br><br>
        <select name="role_id">
            <?php while ($row = mysqli_fetch_assoc($roles_names)): ?>
                <option value=" <?php echo $row['id'] ?>" <?php if ($row['id'] == $result_array['id']) {
                       echo 'selected';
                   }
                   ?>>
                    <?php echo $row['name'] ?>
                </option>
            <?php endwhile; ?>
        </select>
        <br><br>
        <input type="submit" name="update_user" value="Kemaskini">
    </form>
<?php endif; ?>

<h2>All Users</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Role</th>
        <th>Edit</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($user_result)): ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["role_name"]; ?> </td>
            <td><a href="?hantar_id=<?php echo $row["id"]; ?>">Edit</a></td>
        </tr>
    <?php endwhile; ?>
</table>
<?php
include("includes/footer.php");
?>