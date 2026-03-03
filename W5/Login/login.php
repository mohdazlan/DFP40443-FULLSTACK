<?php 
include 'includes/header.php'; 
?>

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card p-4 shadow">
            <h3>Login</h3>
            
            <?php if(isset($_GET['error'])): ?>
                <div class="alert alert-danger">Wrong username/password!</div>
            <?php endif; ?>

            <form action="login-logic.php" method="POST">
                <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
                <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
                <button type="submit" class="btn btn-primary w-100">Enter</button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>