
// Form Validation
function validateRegistrationForm() {
    const form = document.getElementById('registrationForm');
    
    if (!form) return true;
    
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const email = document.getElementById('email').value;
    const username = document.getElementById('username').value;
    
    // Check required fields
    if (!username || !email || !password || !confirmPassword) {
        alert('Please fill in all required fields');
        return false;
    }
    
    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address');
        return false;
    }
    
    // Check password match
    if (password !== confirmPassword) {
        alert('Passwords do not match');
        return false;
    }
    
    // Check password length
    if (password.length < 6) {
        alert('Password must be at least 6 characters long');
        return false;
    }
    
    return true;
}

// Clear form
function clearForm() {
    document.getElementById('registrationForm').reset();
}

// Search functionality
function searchProducts() {
    const keyword = document.getElementById('searchKeyword').value;
    if (keyword) {
        window.location.href = 'product.php?search=' + encodeURIComponent(keyword);
    }
}

// Allow Enter key for search
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchKeyword');
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchProducts();
            }
        });
    }
});

