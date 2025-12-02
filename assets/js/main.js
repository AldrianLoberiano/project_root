/**
 * Main JavaScript File
 */

document.addEventListener('DOMContentLoaded', function() {
    console.log('Application loaded');
    
    // Add event listeners and initialization code here
});

/**
 * Simple form validation
 */
function validateForm(formId) {
    const form = document.getElementById(formId);
    if (!form) return false;
    
    const inputs = form.querySelectorAll('input[required], textarea[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('error');
            isValid = false;
        } else {
            input.classList.remove('error');
        }
    });
    
    return isValid;
}

/**
 * Show notification
 */
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `alert alert-${type}`;
    notification.textContent = message;
    
    const content = document.querySelector('.content');
    if (content) {
        content.insertBefore(notification, content.firstChild);
    }
}

/**
 * Close notification
 */
function closeNotification(element) {
    element.remove();
}
