
<?php
require_once 'database/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Force - Home</title>
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
            <h1>Welcome to Computer Force</h1>
            <p>Computer Force is your online expert in all things computing.</p>
            
            <h2>Featured Categories</h2>
            <div class="product-categories">
                <div class="category-card" onclick="window.location.href='product.php?category=keyboards'">
                    <h3>Keyboards & Mice</h3>
                </div>
                <div class="category-card" onclick="window.location.href='product.php?category=software'">
                    <h3>Software</h3>
                </div>
                <div class="category-card" onclick="window.location.href='product.php?category=peripherals'">
                    <h3>Peripherals</h3>
                </div>
                <div class="category-card" onclick="window.location.href='product.php?category=storage'">
                    <h3>Storage</h3>
                </div>
                <div class="category-card" onclick="window.location.href='product.php?category=graphics'">
                    <h3>Graphics Cards</h3>
                </div>
                <div class="category-card" onclick="window.location.href='product.php?category=printing'">
                    <h3>Printing & Scanning</h3>
                </div>
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

