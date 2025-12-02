<?php
/**
 * Common Header
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo APP_URL; ?>/assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <h1><?php echo APP_NAME; ?></h1>
            <ul class="nav-links">
                <li><a href="<?php echo APP_URL; ?>">Home</a></li>
                <?php if (isLoggedIn()): ?>
                    <li><a href="<?php echo APP_URL; ?>/users/profile.php">Profile</a></li>
                    <li><a href="<?php echo APP_URL; ?>/users/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="<?php echo APP_URL; ?>/users/login.php">User Login</a></li>
                    <li><a href="<?php echo APP_URL; ?>/admin/login.php">Admin Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <main class="content">
