<?php
/**
 * Main Entry Point - Homepage
 */
require_once 'config/config.php';
require_once 'includes/functions.php';
?>
<?php include 'includes/header.php'; ?>

<div class="container">
    <h1>Welcome to <?php echo APP_NAME; ?></h1>
    <p>This is the homepage of your PHP application.</p>
    
    <?php if (isLoggedIn()): ?>
        <p>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <p><a href="users/dashboard.php">Go to Dashboard</a></p>
    <?php else: ?>
        <p><a href="users/login.php">User Login</a> | <a href="admin/login.php">Admin Login</a></p>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>
