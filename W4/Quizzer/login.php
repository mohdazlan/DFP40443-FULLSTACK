<?php
// login.php - Entry point for the quiz system
require_once 'config/app_config.php';
$error='';
if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if(isset($users[$username]) && $users[$username] === $password){
        //sekiranya benar
        $_SESSION['username'] = $username;
        $_SESSION['score'] = 0;
        $_SESSION['soalanSemasa'] = 0;
        
        header('Location: quiz.php');
    } else {
        //sekiranay tidak benar
        $error="Invalid Username or Password";
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

         <input type="text"  name="username" required>   
          <input type="password"  name="password" required>       
         <input type="submit" value="login">     
        </form> </div>  
<?php require_once 'includes/footer.php'; ?>      