<?php 
// 1. The Header does the heavy lifting (starts session and checks if logged in)
include 'includes/header.php'; 

// 2. THE SECURITY GUARD
// If the header found no session, $loggedIn will be false. 
// We kick them out to protect our secret data!
if (!$loggedIn) {
    header("Location: login.php");
    exit();
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Student Control Panel</h4>
                </div>
                <div class="card-body text-center py-5">
                    
                    <h1 class="display-4">
                        Welcome back, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!
                    </h1>
                    
                    <p class="text-muted mb-4">You are now successfully logged into your account.</p>

                    <div class="d-flex justify-content-center gap-3">
                        <a href="quiz.php" class="btn btn-success btn-lg">Start Quiz</a>
                        <a href="profile.php" class="btn btn-info btn-lg">My Profile</a>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <a href="logout.php" class="text-danger decoration-none">Click here to sign out</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
// 4. The Footer closes our <main> and <body> tags
include 'includes/footer.php'; 
?>