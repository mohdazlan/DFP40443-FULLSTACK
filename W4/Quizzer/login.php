<?php
// login.php - Entry point for the quiz system
require_once 'config/app_config.php'
session_start();

// If user is already logged in, redirect to quiz
if (isset($_SESSION['username'])) {
    header('Location: quiz.php');
    exit;
}

// Process login form submission
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    
    if (empty($username)) {
        $error = 'Please enter your name';
    } else {
   
        $_SESSION['username'] = htmlspecialchars($username);
      
        header('Location: quiz.php');
        exit;
    }
}

$pageTitle = 'Login';
require_once 'includes/header.php';
?>

    <h1>Welcome to the Quiz</h1>
    <p>Enter your name to begin</p>
        <?php if ($error): ?>
            <?php echo $error ?>
         <?php endif; ?>
    <form method="POST" action="login.php">
        Your Name:

         <input type="text" id="username" name="username" required>         
         <input type="submit" value="login">     
        </form> </div>  
<?php require_once 'includes/footer.php'; ?>      