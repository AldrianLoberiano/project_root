<?php
/**
 * Configuration File
 * Database connection, constants, and global settings
 */

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'project_db');

// Application Settings
define('APP_NAME', 'My PHP App');
define('APP_URL', 'http://localhost/project_root');
define('APP_DEBUG', true);

// Session Configuration
ini_set('session.use_strict_mode', 1);
session_start();

// Error Reporting
if (APP_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
}

// Database Connection (Optional - implement as needed)
// $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
?>
