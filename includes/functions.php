<?php
/**
 * Reusable Functions
 */

/**
 * Redirect to a specific URL
 */
function redirect($url) {
    header("Location: $url");
    exit;
}

/**
 * Check if user is logged in
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

/**
 * Check if user is admin
 */
function isAdmin() {
    return isset($_SESSION['user_id']) && $_SESSION['role'] === 'admin';
}

/**
 * Sanitize input
 */
function sanitize($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

/**
 * Validate email
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Display flash message
 */
function displayMessage($type = 'info', $message = '') {
    if (isset($_SESSION['message'])) {
        echo '<div class="alert alert-' . $type . '">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']);
    }
}

/**
 * Set flash message
 */
function setMessage($message, $type = 'info') {
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $type;
}
?>
