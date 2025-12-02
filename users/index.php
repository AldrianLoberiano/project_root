<?php
/**
 * User Dashboard
 */
require_once '../config/config.php';
require_once '../includes/functions.php';

// Check if user is logged in
if (!isLoggedIn()) {
    setMessage('Please log in first', 'info');
    redirect('login.php');
}
?>
<?php include '../includes/header.php'; ?>

<div class="container">
    <h1>User Dashboard</h1>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    
    <div class="user-menu">
        <ul>
            <li><a href="profile.php">View Profile</a></li>
            <li><a href="settings.php">Account Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
