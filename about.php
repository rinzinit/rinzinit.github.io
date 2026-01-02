
<?php
require_once 'database/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Force - About</title>
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
            <h1>About Computer Force</h1>
            
            <p>Computer Force is a brand-new start-up company designed to provide first-class service to its customers. Based in Parramatta in Sydney, Computer Force provides top class computing products at bargain prices, for sale throughout Australia.</p>
            
            <h2>Our goals are:</h2>
            <ul style="line-height: 2; margin-left: 20px; margin-top: 15px;">
                <li>To become Australia's most well-known and respected hardware and software provider</li>
                <li>To create a service-based organisation whose goal is to exceed customer's expectations</li>
                <li>To provide a smooth, efficient, and transparent sales process</li>
            </ul>
            
            <h2>Contact Us</h2>
            <div class="contact-info">
                <p><strong>Address:</strong> 100 Main Road, Parramatta, NSW 2150</p>
                <p><strong>Email:</strong> info@computerforce.com.au</p>
                <p><strong>Phone:</strong> 02 4444 5555</p>
            </div>
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

