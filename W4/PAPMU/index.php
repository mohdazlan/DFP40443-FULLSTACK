<?php
$config = include('config/app_config.php');
require_once('includes/alumni_logic.php');

$isLoggedIn=false;
if($_SERVER['REQUEST_METHOD'] =='POST') {
    try {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if($user !== $config['admin_user'] || $pass !== $config['admin_pass']){
            //pengguna x sah
        }  $isLoggedIn = true;
    } catch (Exception $e) {
        //throw $th;
    }
}
?>
<html>
<head>
    <title><?php echo $config['site_name']; ?></title>
</head>
<body style="background-color:<?php echo $config['theme_color'];  ?>">
    <header>
        <nav>
    <ul style="display:flex;list-style-type: style none;">
<?php echo generateMenu($pages); ?>
    </ul>        
    </nav>
    </header>
<?php if($isLoggedIn): ?>
Welcome <?php echo $_POST['username']; ?>
<?php endif; ?>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac viverra urna. Duis sit amet varius tortor, a tristique nisl. Curabitur scelerisque laoreet suscipit. Aliquam aliquam erat sed lacus pulvinar, non cursus ante imperdiet. Mauris maximus maximus lobortis. Morbi in fringilla massa, at lacinia quam. Mauris rutrum sem vestibulum elit finibus, eu pharetra nunc feugiat. Vestibulum laoreet ultrices ornare.</p>
<footer></footer>
</body>
    </html>