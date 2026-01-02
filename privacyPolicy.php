
<?php
require_once 'database/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Force - Privacy Policy</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-top">
            <h1 class="logo">Computer Force</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <div class="search-container">
        <div class="search-box">
            <input type="text" id="searchKeyword" placeholder="Enter keyword">
            <button onclick="searchProducts()">Search</button>
        </div>
    </div>

    <div class="container">
        <aside class="sidebar">
            <h3>Purchases</h3>
            <div class="cart-items">
                <div class="cart-item">
                    <span>Test Item 1</span>
                    <span>$1000</span>
                </div>
                <div class="cart-item">
                    <span>Test Item 2</span>
                    <span>$500</span>
                </div>
            </div>
            <div class="cart-total">
                <div style="display: flex; justify-content: space-between;">
                    <span>Total</span>
                    <span>$1500</span>
                </div>
            </div>
        </aside>

        <main class="main-content">
            <h1>Privacy Policy</h1>
            
            <h2>Information Collection</h2>
            <p>Computer Force collects personal information when you register on our site, place an order, or subscribe to our newsletter. The information we collect includes your name, email address, mailing address, phone number, and payment information.</p>
            
            <h2>Use of Information</h2>
            <p>The information we collect from you may be used to:</p>
            <ul style="line-height: 2; margin-left: 20px; margin-top: 10px;">
                <li>Personalize your experience and respond to your individual needs</li>
                <li>Improve our website based on your feedback</li>
                <li>Process transactions quickly and efficiently</li>
                <li>Send periodic emails regarding your order or other products and services</li>
            </ul>
            
            <h2>Information Protection</h2>
            <p>We implement a variety of security measures to maintain the safety of your personal information. Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights.</p>
            
            <h2>Cookie Usage</h2>
            <p>We use cookies to enhance your experience, gather general visitor information, and track visits to our website. You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies through your browser settings.</p>
            
            <h2>Information Disclosure</h2>
            <p>We do not sell, trade, or otherwise transfer your personally identifiable information to outside parties. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, as long as those parties agree to keep this information confidential.</p>
            
            <h2>Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please contact us at:</p>
            <p><strong>Email:</strong> info@computerforce.com.au</p>
            <p><strong>Phone:</strong> 02 4444 5555</p>
        </main>
    </div>

    <footer>
        <p>&copy; 2025 Leonard Siu All rights reserved</p>
        <div class="footer-links">
            <a href="privacyPolicy.php">Privacy Policy</a>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>

