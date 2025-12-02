<?php
/**
 * User Profile Page
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
    <h1>User Profile</h1>
    
    <div class="profile-section">
        <h2><?php echo htmlspecialchars($_SESSION['username']); ?></h2>
        
        <div class="profile-info">
            <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email'] ?? 'Not set'); ?></p>
            <!-- Add more profile fields as needed -->
        </div>
        
        <div class="profile-actions">
            <a href="edit_profile.php" class="btn btn-primary">Edit Profile</a>
            <a href="index.php" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
