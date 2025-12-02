<?php

/**
 * Admin Dashboard
 */
require_once '../config/config.php';
require_once '../includes/functions.php';

// Check if user is admin
if (!isAdmin()) {
    setMessage('Unauthorized access', 'error');
    redirect('../index.php');
}
?>
<?php include '../includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome to the admin panel, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>

    <div class="admin-menu">
        <ul>
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="manage_content.php">Manage Content</a></li>
            <li><a href="manage_settings.php">Settings</a></li>
        </ul>
    </div>
</div>

<?php include '../includes/footer.php'; ?>