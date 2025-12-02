<?php
/**
 * Admin Logout
 */
require_once '../config/config.php';
require_once '../includes/functions.php';

// Destroy session
session_destroy();

setMessage('You have been logged out', 'info');
redirect('../index.php');
?>
