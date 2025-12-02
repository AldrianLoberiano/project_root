<?php
/**
 * Manage Users
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

<div class="container">
    <h1>Manage Users</h1>
    <p>This page allows administrators to manage user accounts.</p>
    
    <div class="admin-section">
        <h2>User List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- TODO: Populate users from database -->
                <tr>
                    <td colspan="5">No users found</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="admin-actions">
        <button class="btn btn-primary">Add New User</button>
        <a href="index.php" class="btn btn-secondary">Back to Dashboard</a>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
