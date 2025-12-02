<?php
/**
 * User Login
 */
require_once '../config/config.php';
require_once '../includes/functions.php';

// If already logged in, redirect to dashboard
if (isLoggedIn()) {
    redirect('index.php');
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitize($_POST['username'] ?? '');
    $password = sanitize($_POST['password'] ?? '');
    
    // TODO: Implement authentication against database
    // For now, placeholder logic
    if ($username && $password) {
        // Simulated authentication
        $_SESSION['user_id'] = 2;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $username . '@example.com';
        $_SESSION['role'] = 'user';
        
        setMessage('Login successful', 'success');
        redirect('index.php');
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="login-form">
        <h1>User Login</h1>
        
        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        
        <p>Don't have an account? <a href="register.php">Register here</a></p>
        <p><a href="../index.php">Back to Home</a></p>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
